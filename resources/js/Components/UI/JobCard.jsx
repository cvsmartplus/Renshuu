import { Link } from "@inertiajs/react";
import { useState } from "react";

export default function JobCard({ job }) {
    const [isBookmarked, setIsBookmarked] = useState(false);

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

    if (!job) {
        return <p>Data pekerjaan tidak tersedia</p>;
    }

    return (
        <div className="card border-1" style={{ borderRadius: "5px" }}>
            <div className="card-body">
                {/* Header */}
                <div className="d-flex justify-content-between align-items-start">
                    <div className="d-flex align-items-center">
                        <img
                            src={job.company?.logo ?? "https://pixabay.com/get/g4179b0ded7d8cdd470a2f0ec2f00ac27ecff49c99405757e40e48a34762e4d047338ac8a23fa04a91cc0b88e2f2e137260ad17674a2fd22155a15c566f1d1671_640.jpg"}
                            alt={job.company?.biodata?.name}
                            style={{ width: 50, height: 50, borderRadius: "5px", objectFit: "cover" }}
                        />
                        <div className="ms-3">
                            <h6 className="fs-5 mb-0">{job.title}</h6>
                            <p className="text-muted small mb-0">{job.company?.biodata?.name ?? "Perusahaan tidak ditemukan"}</p>
                        </div>
                    </div>
                  {/* Bookmark Button */}
                    <button 
                        className="btn p-0 border-0 bg-transparent"
                        onClick={() => setIsBookmarked(!isBookmarked)}
                    >
                        <i className={`fa-${isBookmarked ? "solid" : "regular"} fa-bookmark fa-lg text-blue`}></i>
                    </button>
                </div>

                {/* Detail Pekerjaan */}
                <p className="text-muted small mb-1">{job.location}</p>
                <p className="mb-1">{job.category?.name ?? "Kategori tidak tersedia"}</p>
                <hr/>
                {/* Footer */}
                <div className="d-flex justify-content-between align-items-center">
                    <small className="text-muted">{formatPostedDate(job.posted_at)}</small>
                    <Link href={route("job.show", job.slug)} className="text-blue text-decoration-none small fw-bold">Selengkapnya &gt;</Link>
                </div>
            </div>
        </div>
    );
}
