import Layout from "@/Layouts/layout";
import { Head, Link } from "@inertiajs/react";

export default function SingleJob({ job }) {

        const formatPostedDate = (dateString) => {
        const postedDate = new Date(dateString);
        const now = new Date();
        const diffInSeconds = Math.floor((now - postedDate) / 1000);

        const minutes = Math.floor(diffInSeconds / 60);
        const hours = Math.floor(minutes / 60);
        const days = Math.floor(hours / 24);

        if (minutes < 1) return "Baru saja";
        if (minutes < 60) return `${minutes} menit yang lalu`;
        if (hours < 24) return `${hours} jam yang lalu`;
        if (days < 3) return `${days} hari yang lalu`;

        return new Intl.DateTimeFormat("id-ID", {
            day: "2-digit",
            month: "long",
            year: "numeric"
        }).format(postedDate);
    };

    console.log(job);
    
    return (
        <Layout>
            <Head title={job.title} />
            <div>
                {/* Header */}
                <div className="sidebar p-5 text-center rounded">
                    <h2 className="fw-bold text-jost">Tentang Pekerjaan</h2>
                </div>

                {/* Job Detail */}
                <div className="card mt-4 container">
                    <div className="card-body">
                        <div className="d-flex align-items-center">
                            <img
                                src={`/images/${job.company.biodata.logo}`}
                                alt={job.company.biodata.name}
                                className="rounded me-3"
                                style={{ width: "80px", height: "80px", objectFit: "contain" }}
                            />
                            <div>
                                <h1 className="h3 fw-bold">{job.title}</h1>
                                <p className="text-muted">{job.company.biodata.name}</p>
                                <p className="text-secondary">
                                    <i className="fas fa-map-marker-alt me-2"></i> {job.location} •  
                                    <i className="fas fa-briefcase ms-2 me-2"></i> {job.type} •  
                                    <i className="fas fa-money-bill-wave ms-2 me-2"></i> Rp {parseInt(job.salary).toLocaleString()}
                                </p>
                                <p>Diposting pada {formatPostedDate(job.posted_at)}</p>
                            </div>
                        </div>

                        {/* Buttons */}
                        <div className="mt-3">
                            <button className="btn btn-cta me-2">Lamar Sekarang</button>
                            <button className="btn btn-outline-secondary">
                                <i className="fas fa-bookmark me-2"></i> Simpan
                            </button>
                        </div>

                        {/* Deskripsi */}
                        <div className="mt-4">
                            <h3 className="fw-semibold">Deskripsi</h3>
                            <p className="text-muted">{job.description}</p>
                        </div>
                    </div>
                </div>

                <div className="card border-0 mt-4">
                    <div className="card-body container">
                        <h3 className="fw-semibold">Tentang Perusahaan :</h3>

                        <div className="card p-3 mt-3">
                            <div className="d-flex align-items-center">
                                {/* Logo Perusahaan */}
                                <img
                                    src={`/images/${job.company.biodata.logo}`}
                                    alt={job.company.biodata.name}
                                    className="rounded me-3"
                                    style={{ width: "100px", height: "60px", objectFit: "contain" }}
                                />
                                <div>
                                    {/* Nama Perusahaan */}
                                    <h4 className="fw-bold mb-1">{job.company.biodata.name}</h4>
                                    {/* Posisi */}
                                    <p className="text-secondary mb-1">
                                        <i className="fas fa-briefcase me-2"></i> {job.title}
                                    </p>
                                    {/* Lokasi */}
                                    <p className="text-secondary mb-1">
                                        <i className="fas fa-map-marker-alt me-2"></i> {job.location}
                                    </p>
                                    {/* Jenis Pekerjaan */}
                                    <p className="text-secondary">
                                        <i className="fas fa-laptop-house me-2"></i> {job.type}
                                    </p>
                                </div>
                            </div>

                            {/* Deskripsi Perusahaan */}
                            <p className="mt-3 text-muted">{job.company.biodata.description}</p>

                            {/* Alamat Perusahaan */}
                            <p className="text-secondary">
                                <strong>Alamat perusahaan:</strong> {job.company.biodata.address}
                            </p>

                            {/* Kontak Perusahaan */}
                            <p className="text-secondary">
                                <i className="fas fa-phone me-2"></i> {job.company.biodata.telephone} <br />
                                <i className="fas fa-envelope me-2"></i> {job.company.biodata.email}
                            </p>

                            {/* Website Perusahaan */}
                            <p>
                                <i className="fas fa-globe me-2"></i>
                            <Link 
                                href={job.company.biodata.website} 
                                target="_blank" 
                                rel="noopener noreferrer" 
                                className="text-blue text-decoration-underline"
                            >
                                {job.company.biodata.website}
                            </Link>

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </Layout>
    );
}
