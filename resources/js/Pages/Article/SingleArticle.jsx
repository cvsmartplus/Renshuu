import React from "react";
import { Head, usePage } from "@inertiajs/react";
import Layout from "@/Layouts/layout";

const SingleArticle = () => {
    const { article } = usePage().props;

    if (!article) {
        return <div className="text-center py-5">Loading...</div>;
    }

    return (
        <Layout>
            <Head title={article.title} />
            <div className="container py-5">
                <div className="row justify-content-center">
                    <div className="col-lg-8 col-md-10">
                        {/* Tombol Kembali */}
                        <button
                            onClick={() => window.history.back()}
                            className="btn btn-outline-secondary mb-4 d-flex align-items-center"
                        >
                            <i className="bi bi-arrow-left me-2"></i> Kembali
                        </button>

                        {/* Gambar Utama */}
                        <div className="text-center">
                            <img
                                src={article.media_path}
                                alt={article.title}
                                className="img-fluid rounded shadow-sm"
                                style={{ maxHeight: "350px", objectFit: "cover"}}
                            />
                        </div>

                        {/* Judul Artikel */}
                        <h1 className="fw-bold mt-4">{article.title}</h1>

                        {/* Deskripsi */}
                        <p className="text-muted fs-5">{article.excerpt}</p>

                        {/* Konten Artikel */}
                        <div
                            className="content markdown-body mt-4 p-3"
                            dangerouslySetInnerHTML={{ __html: article.content }}
                        />
                    </div>
                </div>
            </div>
        </Layout>
    );
};

export default SingleArticle;
