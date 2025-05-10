import { Head } from "@inertiajs/react";
import { useState } from "react";
import Layout from "@/Layouts/layout";
import SideBar from "@/Components/Common/SideBar";

const ModalPreview = ({ show, onClose, imageUrl }) => {
    if (!show) return null;

    return (
        <div
            style={{
                position: "fixed",
                top: 0,
                left: 0,
                width: "100%",
                height: "100%",
                backgroundColor: "rgba(0,0,0,0.5)",
                display: "flex",
                justifyContent: "center",
                alignItems: "center",
            }}
        >
            <div
                style={{
                    background: "white",
                    padding: "20px",
                    borderRadius: "8px",
                    position: "relative",
                    maxWidth: "90%",
                    maxHeight: "90%",
                    overflow: "auto",
                }}
            >
                <button
                    style={{
                        position: "absolute",
                        top: "0px",
                        right: "0px",
                        border: "none",
                        background: "none",
                        fontSize: "20px",
                        cursor: "pointer",
                    }}
                    onClick={onClose}
                >
                    &times;
                </button>
                <img src={imageUrl} alt="Dokumen Pratinjau" style={{ width: "100%", height: "auto" }} />
            </div>
        </div>
    );
};

export default function UserDocuments() {
    const [previewOpen, setPreviewOpen] = useState(false);
    const [previewImage, setPreviewImage] = useState("");

    const handlePreview = (imageUrl) => {
        setPreviewImage(imageUrl);
        setPreviewOpen(true);
    };

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
                <div style={{ padding: "20px" }}>
                    <h2>Kelengkapan Dokumen</h2>
                    <p>Lengkapi dokumen untuk mempermudah proses pendaftaran.</p>
                    <table style={{ width: "100%", borderCollapse: "collapse", marginTop: "20px" }}>
                        <thead>
                            <tr style={{ background: "#f8f9fa", textAlign: "left" }}>
                                <th style={{ padding: "10px", border: "1px solid #ddd" }}>Dokumen</th>
                                <th style={{ padding: "10px", border: "1px solid #ddd" }}>File</th>
                                <th style={{ padding: "10px", border: "1px solid #ddd" }}>Tanggal Diunggah</th>
                                <th style={{ padding: "10px", border: "1px solid #ddd" }}>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {["CV", "KTP"].map((doc, index) => (
                                <tr key={index} style={{ borderBottom: "1px solid #ddd" }}>
                                    <td style={{ padding: "10px", border: "1px solid #ddd" }}>{doc}</td>
                                    <td style={{ padding: "10px", border: "1px solid #ddd" }}>
                                        <i className="bi bi-file-earmark-pdf text-danger"></i>{" "}
                                        <i
                                            className="bi bi-eye text-primary"
                                            style={{ cursor: "pointer" }}
                                            onClick={() => handlePreview(`https://picsum.photos/seed/${index}/500/300`)}
                                        ></i>
                                    </td>
                                    <td style={{ padding: "10px", border: "1px solid #ddd" }}>7 Jan 2023</td>
                                    <td style={{ padding: "10px", border: "1px solid #ddd" }}>
                                        <button
                                            style={{
                                                background: "#dc3545",
                                                color: "white",
                                                border: "none",
                                                padding: "5px 10px",
                                                borderRadius: "5px",
                                                cursor: "pointer",
                                            }}
                                        >
                                            <i className="bi bi-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </SideBar>
            <ModalPreview show={previewOpen} onClose={() => setPreviewOpen(false)} imageUrl={previewImage} />
        </Layout>
    );
}
