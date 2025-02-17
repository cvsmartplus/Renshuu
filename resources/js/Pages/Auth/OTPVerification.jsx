import InputError from "@/Components/UI/InputError";
import PrimaryButton from "@/Components/UI/PrimaryButton";
import Layout from "@/Layouts/Layout";
import { Head, useForm } from "@inertiajs/react";
import { useRef, useEffect } from "react";
import { toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

export default function OTPVerification({email}) {
    const { data, setData, post, processing, errors, reset } = useForm({ otp: "" });
    const inputRefs = useRef([]);

    useEffect(() => {
        if (errors.otp) {
            toast.error(errors.otp, {
                position: "top-center",
                autoClose: 3000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
            });
        }
    }, [errors]);

    const handleChange = (e, index) => {
        const value = e.target.value.replace(/[^0-9]/g, "");
        const newOtp = data.otp.split("");
        newOtp[index] = value;
        setData("otp", newOtp.join(""));

        if (value && index < 5) {
            inputRefs.current[index + 1].focus();
        }
    };

    const handleKeyDown = (e, index) => {
        if (e.key === "Backspace" && !data.otp[index] && index > 0) {
            inputRefs.current[index - 1].focus();
        }
    };

    const submit = (e) => {
        e.preventDefault();
        post(route('otp.verify.post'), {
            onError: (err) => {
                console.log("Error response:", err);
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
            <Head title="Verifikasi OTP" />
            <Layout >
                <section className="py-4 py-md-5 py-xl-5" style={{ height: "60vh" }}>
                    <div className="container">
                        <div className="row gy-4 align-items-center">
                            <div className="col-12 col-md-6 col-xl-7 d-flex justify-content-center">
                                <div className="col-12 col-xl-9">
                                    <img className="img-fluid" loading="lazy" src="../images/assets/OTP-CheckYourEmail.png" alt="OTP Banner" />
                                </div>
                            </div>
                            <div className="col-12 col-md-6 col-xl-5 d-flex justify-content-center">
                                <div className="card p-3 shadow-sm" style={{ maxWidth: "400px", width: "100%" }}>
                                    <div className='row mb-3 align-items-center'>
                                    <div className=" mb-4 align-items-center d-flex justify-content-between flex-wrap">
                                        <h2 className="text-bold">Verifikasi OTP</h2>
                                        <p className="text-end">Langkah 2 dari 5</p>
                                    </div>
                                        <p>Kami telah mengirimkan kode OTP ke <strong>{email}</strong>. Masukkan 6 digit kode untuk melanjutkan.</p>
                                    </div>
                                    <div className="card-body">
                                        <form onSubmit={submit} className="text-center">
                                            <div className="d-flex justify-content-between mb-3">
                                                {[...Array(6)].map((_, index) => (
                                                    <input
                                                        key={index}
                                                        ref={(el) => (inputRefs.current[index] = el)}
                                                        type="text"
                                                        maxLength="1"
                                                        className="form-control text-center mx-1"
                                                        style={{ width: "40px", height: "50px", fontSize: "1.5rem" }}
                                                        value={data.otp[index] || ""}
                                                        onChange={(e) => handleChange(e, index)}
                                                        onKeyDown={(e) => handleKeyDown(e, index)}
                                                        required
                                                    />
                                                ))}
                                            </div>
                                            <InputError message={errors.otp} className="fs-6"/>
                                            
                                            <PrimaryButton className="btn-cta w-100 rounded p-1 mt-2" disabled={processing}>
                                                Verifikasi
                                            </PrimaryButton>
                                        </form>
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