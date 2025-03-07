import CourseCard from "@/Components/UI/CourseCard";
import Layout from "@/Layouts/layout";
import { Head } from "@inertiajs/react";
import { useState } from "react";

export default function SingleCourse({ course, relatedCourses }) {
    const [activeTab, setActiveTab] = useState("deskripsi");

    return (
        <Layout>
            <Head title={course.title} />
            <div className="container mt-5">
                <div className="row">
                    <div className="col-lg-8 col-md-7 col-12 mb-4">
                        {/* Tombol Back */}
                        <button className="btn btn-outline-secondary mb-3" onClick={() => window.history.back()}>
                            &larr; Kembali
                        </button>

                        {/* Informasi Kursus */}
                        <div className="d-flex align-items-center mb-3">
                            <img src={course.image} alt={course.trainers_name} className="rounded-circle me-3" width="50" />
                            <div>
                                <h5 className="mb-0">{course.trainers_name}</h5>
                                <span className="badge bg-dark">Intermediate</span>
                            </div>
                        </div>
                        <h2 className="fw-bold">{course.title}</h2>

                        {/* Tab Menu */}
                        <ul className="nav nav-tabs mt-3">
                            {['deskripsi', 'pemateri'].map(tab => (
                                <li className="nav-item" key={tab}>
                                    <button 
                                        className={`nav-link ${activeTab === tab ? "active" : ""}`} 
                                        onClick={() => setActiveTab(tab)}
                                    >
                                        {tab.charAt(0).toUpperCase() + tab.slice(1)}
                                    </button>
                                </li>
                            ))}
                        </ul>

                        {/* Konten Tab */}
                        <div className="mt-3">
                            {activeTab === "deskripsi" ? (
                                <div>
                                    <h5>Transformasi Digital di Pabrik</h5>
                                    <p>
                                        Kursus ini mengajarkan cara menerapkan teknologi canggih seperti otomasi industri, Internet of Things (IoT), dan analisis data di pabrik.
                                    </p>
                                    <h5 className="mt-4">Yang Akan Kamu Pelajari</h5>
                                    <ul>
                                        <li>Optimisasi Proses Produksi</li>
                                        <li>Keamanan Kerja yang Ditingkatkan</li>
                                        <li>Analitik Prediktif</li>
                                        <li>Inovasi Berkelanjutan</li>
                                    </ul>
                                </div>
                            ) : (
                                <div>
                                    <h5>Pemateri</h5>
                                    {[
                                        { name: "Dr. Andi Wijaya", desc: "Ahli Transformasi Digital dan Otomasi Industri." },
                                        { name: "Ir. Siti Rahmawati", desc: "Pakar Keamanan Siber dan Manajemen Perubahan." }
                                    ].map((pemateri, index) => (
                                        <div className="d-flex align-items-center mt-3" key={index}>
                                            <img src="https://via.placeholder.com/80" alt={pemateri.name} className="rounded-circle me-3" />
                                            <div>
                                                <h6>{pemateri.name}</h6>
                                                <p>{pemateri.desc}</p>
                                            </div>
                                        </div>
                                    ))}
                                </div>
                            )}
                        </div>
                    </div>

                    {/* Sidebar */}
                    <div className="col-lg-4 col-md-5 col-12">
                        <div className="card shadow-sm p-2 rounded">
                            <img src={course.image} className="card-img-top rounded" alt={course.title} />
                            <div className="card-body">
                                <div className="d-flex justify-content-between">
                                    <h5 className="text-danger fw-bold mb-0 fs-4">
                                        {new Intl.NumberFormat("id-ID", { style: "currency", currency: "IDR", minimumFractionDigits: 0 }).format(course.price - (course.price * course.discount / 100))}
                                    </h5>
                                    <p className="text-muted text-decoration-line-through ms-2 small">
                                        {new Intl.NumberFormat("id-ID", { style: "currency", currency: "IDR", minimumFractionDigits: 0 }).format(course.price)}
                                    </p>
                                    <span className="badge bg-light text-danger fw-bold">{course.discount}% off</span>
                                </div>
                                <hr />
                                <div className="mb-2"><i className="bi bi-bar-chart-fill me-2"></i><strong>Level:</strong> {course.level}</div>
                                <div className="mb-2"><i className="bi bi-people-fill me-2"></i><strong>Siswa:</strong> {course.student}</div>
                                <div className="mb-2"><i className="bi bi-calendar-event-fill me-2"></i><strong>Jadwal:</strong> 28 Januari 2008</div>
                                <div className="mb-3"><i className="bi bi-clock-fill me-2"></i><strong>Durasi:</strong> {course.duration}</div>
                                <a href="#" className="btn btn-cta w-100">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Kursus Terkait */}
                {relatedCourses.length > 0 && (
                    <div className="container my-5">
                        <h2 className="fw-bold mb-4">Kursus Terkait</h2>
                        <div className="row g-3">
                            {relatedCourses.map((relatedCourse) => (
                                <div key={relatedCourse.id} className="col-lg-3 col-md-3 col-sm-4 col-10">
                                    <CourseCard course={relatedCourse} />
                                </div>
                            ))}
                        </div>
                    </div>
                )}
            </div>
        </Layout>
    );
}
