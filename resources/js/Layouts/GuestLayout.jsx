import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';

export default function GuestLayout({ status, children }) {
    return (
        <div className="d-flex justify-content-center align-items-center vh-100">
            <div className="card shadow-lg p-4" style={{ width: '400px' }}>
            <div className="card-body">
                        <h2 className="text-center mb-4">Masuk</h2>

                        {status && (
                            <div className="alert alert-success text-center">
                                {status}
                            </div>
                        )}
                {children}
            </div>
            </div>
        </div>
    );
}
