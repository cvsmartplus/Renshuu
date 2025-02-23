import ForgotPasswordForm from '@/Components/Forms/ForgotPasswordForm';
import Layout from '@/Layouts/layout';
import { Head, Link } from '@inertiajs/react';

export default function ForgotPassword({ status }) {
    return (
        <Layout>
            <Head title="Forgot Password" />
            <div className="container d-flex justify-content-center align-items-center" style={{ minHeight: "90vh" }}>
                <div className="card shadow-lg p-5" style={{ maxWidth: "500px", width: "100%" }}>
                    <div className="card-body">
                        <h4 className="card-title text-center text-blue mb-3">
                            <i className="fas fa-unlock-alt"></i> Lupa Kata Sandi?
                        </h4>

                        <div className="alert alert-info text-center">
                            Masukkan email Anda, kami akan mengirimkan tautan untuk mereset kata sandi.
                        </div>

                        {status && (
                            <div className="alert alert-success text-center">
                                {status}
                            </div>
                        )}

                        {/* Jangan buat container lagi di ForgotPasswordForm */}
                        <ForgotPasswordForm />
                    </div>
                        <div className="text-center mt-3">
                            <p>Belum punya akun? Ayo <Link className="text-decoration-none text-blue" href={route('register')}>Daftar</Link></p>
                        </div>
                </div>
            </div>
        </Layout>
    );
}
