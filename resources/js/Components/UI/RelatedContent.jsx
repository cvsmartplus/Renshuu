export default function RelatedContent({ data }) {
    return (
        <>
                {/* Kursus terkait */}
                <h2 className="mt-5">Lihat Kelas lainnya!</h2>
                <div className="row">
                    {relatedCourses.length > 0 ? (
                        relatedCourses.map((relatedCourse) => (
                            <div key={relatedCourse.id} className="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <div
                                    className={`card shadow-sm p-2 ${hovered === relatedCourse.id ? "shadow-lg" : ""}`}
                                    style={{
                                        transition: "all 0.3s ease-in-out",
                                        transform: hovered === relatedCourse.id ? "scale(1.05)" : "scale(1)",
                                    }}
                                    onMouseEnter={() => setHovered(relatedCourse.id)}
                                    onMouseLeave={() => setHovered(null)}
                                >
                                    <img
                                        src={relatedCourse.image}
                                        className="card-img-top"
                                        alt={relatedCourse.title}
                                    />
                                    <div className="card-body text-start">
                                        <h5 className="card-title fs-4 mb-3">{relatedCourse.title}</h5>
                                        <p className="card-text">{relatedCourse.description}</p>
                                        <div className="d-flex align-items-center mb-2">
                                            <i className="fas fa-user me-2"></i> {relatedCourse.student}
                                        </div>
                                        <hr />
                                        <div className="d-flex justify-content-between">
                                            <p className="text-dark">
                                                Harga: <b>Rp{relatedCourse.price}</b>
                                            </p>
                                            <a
                                                href={route("course.show", { slug: relatedCourse.slug })}
                                                className="text-dark text-decoration-none"
                                            >
                                                Selengkapnya &gt;
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ))
                    ) : (
                        <p className="text-center w-100">Tidak ada kursus yang ditemukan.</p>
                    )}
                </div>
        </>
    );
}