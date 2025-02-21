import ForgotPasswordForm from '@/Components/Forms/ForgotPasswordForm';
import Layout from '@/Layouts/layout';
import { Head } from '@inertiajs/react';

export default function ForgotPassword({ status }) {
    return (
        <Layout>
            <Head title="Forgot Password" />
            <div className="container d-flex justify-content-center align-items-center" style={{ minHeight: "90vh" }}>
                <div className="card shadow-lg p-4" style={{ maxWidth: "500px", width: "100%" }}>
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
                </div>
            </div>
        </Layout>
    );
}
