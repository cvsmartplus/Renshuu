import { useState, useEffect } from 'react';
import TitlePage from "@/Components/Common/TitlePage";
import JobCard from "@/Components/UI/JobCard";
import Layout from "@/Layouts/layout";
import { Head } from "@inertiajs/react";
import SearchFilterBar from '@/Components/Common/SearchFilterBar';
import Checkbox from '@/Components/UI/Checkbox';

export default function Job({ allJobListings }) {




    const [searchTerm, setSearchTerm] = useState("");
    const [selectedFilter, setFilter] = useState("Semua Pekerjaan");
    const [selectedTypes, setSelectedTypes] = useState([]);
    const [selectedLocations, setSelectedLocations] = useState([]);
    const [currentPage, setCurrentPage] = useState(1);
    const jobsPerPage = 10;

    const handleTypeChange = (type) => {
        setSelectedTypes(prev => 
            prev.includes(type) ? prev.filter(t => t !== type) : [...prev, type]
        );
    };

    useEffect(() => {
        console.log("Current search term:", searchTerm);
    }, [searchTerm]);

    const handleLocationChange = (location) => {
        setSelectedLocations(prev => 
            prev.includes(location) ? prev.filter(l => l !== location) : [...prev, location]
        );
    };

    // Ambil daftar kategori unik dari data pekerjaan
    const categories = ["Semua Pekerjaan", ...new Set(allJobListings.map(job => job.category?.name).filter(Boolean))];

    const filteredJobs = allJobListings.filter(job => {
        // Pastikan job tidak null atau undefined
        if (!job) return false;

        const matchesSearch = job.title?.toLowerCase().includes(searchTerm.toLowerCase()) ||
                            job.company?.name?.toLowerCase().includes(searchTerm.toLowerCase()) ||
                            job.location?.toLowerCase().includes(searchTerm.toLowerCase());

        const matchesCategory = selectedFilter === "Semua Pekerjaan" || job.category?.name === selectedFilter;

        const matchesType = selectedTypes.length === 0 || selectedTypes.includes(job.type);

        const matchesLocation = selectedLocations.length === 0 || selectedLocations.includes(job.location);

        return matchesSearch && matchesCategory && matchesType && matchesLocation;
    });


    // PAGINATION
    const indexOfLastJob = currentPage * jobsPerPage;
    const indexOfFirstJob = indexOfLastJob - jobsPerPage;
    const currentJobs = filteredJobs.slice(indexOfFirstJob, indexOfLastJob);

    const totalPages = Math.ceil(filteredJobs.length / jobsPerPage);
    const paginate = (pageNumber) => setCurrentPage(pageNumber);

    return (
        <Layout>
            <Head title="Job" />
            <TitlePage title="Pekerjaan" />

            <div className="container my-4">
                <h2 className="text-center">Cari loker di Indonesia</h2>
                <SearchFilterBar 
                    searchTerm={searchTerm} 
                    setSearchTerm={setSearchTerm} 
                    filters={categories} 
                    setFilter={setFilter} 
                    placeholder="Cari nama pekerjaan, perusahaan" 
                />


                <div className="row mt-4">
                    <div className="col-md-4">
                        <h3>Informasi Pekerjaan</h3>
                        <div className="list-group">
                            <div className="mb-3">
                                <h6>Tipe pekerjaan</h6>
                                {["Remote", "Full-time", "Part-time"].map((type, index) => (
                                    <Checkbox 
                                        key={index}
                                        id={`checkbox-${type}`} // ID unik agar sesuai dengan label
                                        checked={selectedTypes.includes(type)}
                                        onChange={() => handleTypeChange(type)} 
                                        label={type}
                                        className="me-2"
                                    />
                                ))}
                            </div>
                            <div className="mb-3">
                                <h6>Lokasi</h6>
                                {["Jakarta", "Bandung"].map(location => (
                                    <div key={location}>
                                        <input 
                                            type="checkbox" 
                                            checked={selectedLocations.includes(location)}
                                            onChange={() => handleLocationChange(location)} 
                                        /> {location}
                                    </div>
                                ))}
                            </div>
                        </div>
                    </div>
                    <div className="col-md-8">
                        <h3>Lowongan Kerja</h3>
                        <div className="row">
                            {currentJobs.length > 0 ? (
                                currentJobs.map((job, index) => (
                                    <div key={index} className="col-md-6 mb-4">
                                        <JobCard job={job} />
                                    </div>
                                ))
                            ) : (
                                <p className="text-center">Tidak ada pekerjaan yang ditemukan</p>
                            )}
                        </div>
                        <div className="btn-toolbar mt-3 justify-content-center" role="toolbar" aria-label="Pagination">
                            <div className="btn-group" role="group" aria-label="Page navigation">
                                {Array.from({ length: totalPages }, (_, index) => (
                                    <button 
                                        key={index + 1} 
                                        onClick={() => paginate(index + 1)} 
                                        className={`btn btn-outline-secondary ${currentPage === index + 1 ? 'active' : ''}`}
                                    >
                                        {index + 1}
                                    </button>
                                ))}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Layout>
    );
}
