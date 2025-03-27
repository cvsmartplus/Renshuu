import { Head } from "@inertiajs/react";
import Layout from "@/Layouts/layout";
import SideBar from "@/Components/Common/SideBar";

export default function Profile() {
    return (
        <Layout>
            <Head title="Profile" />
            <SideBar>
                <div className='profile ' style={{
                    backgroundImage: "url('../../../images/assets/framer.png')",
                    backgroundRepeat: "no-repeat",
                    backgroundPosition: "right",
                    height: "10vh"             
                }}>
                </div>
                <div className="container-fluid">
                    <div className="row">
                        {/* Profile Header */}
                        <div className="col-md-12 p-4">
                            <div className="shadow-sm p-4 rounded bg-white">
                                <div className="d-flex align-items-center border-bottom pb-3">
                                    <img
                                        src="https://picsum.photos/150"
                                        alt="Profile"
                                        className="rounded-circle img-fluid"
                                        style={{
                                            width: "100px",
                                            height: "100px",
                                            objectFit: "cover",
                                        }}
                                    />
                                    <div className="ms-3">
                                        <h2 className="fw-bold mb-0">
                                            Habibi Ahmad Aziz
                                        </h2>
                                        <p className="text-muted">
                                            Fullstack Developer
                                        </p>
                                    </div>
                                </div>

                                {/* About Me */}
                                <div className="mt-4">
                                    <h5 className="fw-semibold">Deskripsi</h5>
                                    <p className="text-muted">
                                        “Saya adalah seorang pengembang fullstack dengan pengalaman lebih dari 5 tahun dalam mengembangkan aplikasi web dan mobile...”
                                    </p>
                                </div>

                                {/* Skills */}
                                <div className="mt-4">
                                    <h5 className="fw-semibold">Keahlian</h5>
                                    <div className="d-flex flex-wrap gap-2 mt-2">
                                        {[
                                            "Komunikasi",
                                            "React",
                                            "Node.js",
                                            "PostgreSQL",
                                            "Tailwind CSS",
                                        ].map((skill, index) => (
                                            <span
                                                key={index}
                                                className="badge bg-primary text-white p-2"
                                            >
                                                {skill}
                                            </span>
                                        ))}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {/* Informasi Pribadi */}
                        <div className="col-md-12 p-4">
                            <div className="shadow-sm p-4 rounded bg-white">
                                <h5 className="fw-semibold border-bottom pb-2">
                                    Informasi Pribadi
                                </h5>
                                <ul className="list-unstyled text-muted">
                                    <li>
                                        <i className="fs-5 bi bi-envelope me-2"></i>
                                        Email: habibi@example.com
                                    </li>
                                    <li>
                                        <i className="fs-5 bi bi-telephone me-2"></i>
                                        Telepon: +62 8382 893 2837
                                    </li>
                                    <li>
                                        <i className="fs-5 bi bi-person me-2"></i>
                                        Jenis Kelamin: Laki-laki
                                    </li>
                                    <li>
                                        <i className="fs-5 bi bi-calendar me-2"></i>
                                        Tanggal Lahir: Mei 20, 2000
                                    </li>
                                    <li>
                                        <i className="fs-5 bi bi-geo-alt me-2"></i>
                                        Tempat Tinggal: Karawang, Jawa Barat
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {/* Informasi Pendidikan */}
                        <div className="col-md-12 p-4">
                            <div className="shadow-sm p-4 rounded bg-white">
                                <h5 className="fw-semibold border-bottom pb-2">
                                    Informasi Pendidikan
                                </h5>
                                <ul className="list-unstyled text-muted">
                                    <li>
                                        <i className="fs-5 bi bi-mortarboard me-2"></i>
                                        Pendidikan Terakhir: SMKN 1 Karawang
                                    </li>
                                    <li>
                                        <i className="fs-5 bi bi-calendar-check me-2"></i>
                                        Tahun Kelulusan: 2026
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </SideBar>
        </Layout>
    );
}
