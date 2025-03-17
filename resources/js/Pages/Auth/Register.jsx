import { useState, useEffect } from "react";
import Checkbox from "@/Components/UI/Checkbox";
import InputError from "@/Components/UI/InputError";
import InputLabel from "@/Components/UI/InputLabel";
import PrimaryButton from "@/Components/UI/PrimaryButton";
import TextInput from "@/Components/UI/TextInput";
import Layout from "@/Layouts/Layout";
import { Head, useForm } from "@inertiajs/react";
import { toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
        terms: false,
    });

    const [isLoading, setIsLoading] = useState(false); // State untuk mengontrol loading

    useEffect(() => {
        if (errors.email) {
            toast.error(errors.email, {
                position: "top-center",
                autoClose: 3000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
            });
        }
    }, [errors]);

    const submit = (e) => {
        e.preventDefault();
        setIsLoading(true); // Aktifkan loading

        post(route("register"), {
            onFinish: () => {
                setIsLoading(false); // Matikan loading setelah request selesai
                reset("password", "password_confirmation");
            },
            onError: (err) => {
                console.log("Error response:", err);
                setIsLoading(false); // Matikan loading jika ada error
                if (err.otp) {
                    toast.error("OTP yang Anda masukkan salah!", {
                        position: "top-center",
                        autoClose: 3000,
                        hideProgressBar: false,
                        closeOnClick: true,
                        pauseOnHover: true,
                        draggable: true,
                    });
                }
            },
        });
    };

    return (
        <>
            <Head title="Register" />
            <Layout>
                {/* Overlay Loading */}
                {isLoading && (
                    <div className="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex justify-content-center align-items-center" style={{ zIndex: 1050 }}>
                        <div className="spinner-border text-light" role="status" style={{ width: "4rem", height: "4rem" }}>
                            <span className="visually-hidden">Loading...</span>
                        </div>
                    </div>
                )}

                {/* Registration Section */}
                <section className="py-3 py-md-5 py-xl-8">
                    <div className="container">
                        <div className="row gy-4 align-items-center">
                            {/* Image Section */}
                            <div className="col-12 col-md-6 col-xl-7 d-flex justify-content-center">
                                <div className="col-12 col-xl-9">
                                    <img className="img-fluid" loading="lazy" src="../images/assets/register.png" alt="Register" />
                                </div>
                            </div>

                            {/* Form Section */}
                            <div className="col-12 col-md-6 col-xl-5 d-flex justify-content-center">
                                <div className="card p-3 shadow-sm" style={{ maxWidth: "400px", width: "100%" }}>
                                    {/* Header Form */}
                                    <div className="mb-3 align-items-center d-flex justify-content-between flex-wrap">
                                        <h2 className="text-bold">Daftar</h2>
                                        <p className="text-end">Langkah 1 dari 5</p>
                                    </div>

                                    <div className="card-body">
                                        <form onSubmit={submit}>
                                            {/* Name Input */}
                                            <div className="mb-3">
                                                <InputLabel htmlFor="name" value="Nama" />
                                                <TextInput id="name" type="text" name="name" value={data.name} className="form-control" autoComplete="name" isFocused={true} onChange={(e) => setData("name", e.target.value)} required />
                                                <InputError message={errors.name} />
                                            </div>

                                            {/* Email Input */}
                                            <div className="mb-3">
                                                <InputLabel htmlFor="email" value="Email" />
                                                <TextInput id="email" type="email" name="email" value={data.email} className="form-control" autoComplete="username" onChange={(e) => setData("email", e.target.value)} required />
                                                <InputError message={errors.email} />
                                            </div>

                                            {/* Password Input */}
                                            <div className="mb-3">
                                                <InputLabel htmlFor="password" value="Kata Sandi" />
                                                <TextInput id="password" type="password" name="password" value={data.password} className="form-control" autoComplete="current-password" onChange={(e) => setData("password", e.target.value)} required />
                                                <InputError message={errors.password} />
                                            </div>

                                            {/* Confirm Password Input */}
                                            <div className="mb-3">
                                                <InputLabel htmlFor="password_confirmation" value="Ulangi Kata Sandi" />
                                                <TextInput id="password_confirmation" type="password" name="password_confirmation" value={data.password_confirmation} className="form-control" autoComplete="new-password" onChange={(e) => setData("password_confirmation", e.target.value)} required />
                                                <InputError message={errors.password_confirmation} />
                                            </div>

                                            {/* Terms & Conditions */}
                                            <div className="mb-3 d-flex align-items-center">
                                                <Checkbox 
                                                    name="terms" 
                                                    checked={data.terms} 
                                                    id="terms" 
                                                    required 
                                                    label="Saya menyetujui syarat & ketentuan layanan" 
                                                    className="small" // Tambahkan class untuk ukuran kecil jika perlu
                                                    onChange={(e) => setData("terms", e.target.checked)} 
                                                />
                                            </div>

                                            {/* Submit Button */}
                                            <PrimaryButton className="btn-cta w-100 rounded p-1" disabled={processing}>
                                                Daftar
                                            </PrimaryButton>
                                        </form>

                                        {/* Login Redirect */}
                                        <div className="mt-3">
                                            <p className="text-center">
                                                Sudah punya akun?{" "}
                                                <a className="text-decoration-none text-blue" data-bs-toggle="modal" data-bs-target="#loginModal" style={{ cursor: "pointer" }}>
                                                    Masuk
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </Layout>
        </>
    );
}
