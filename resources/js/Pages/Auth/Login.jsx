import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import GuestLayout from '@/Layouts/GuestLayout';
import { Head } from '@inertiajs/react';
import LoginForm from '@/Components/LoginForm';

export default function Login({ status, canResetPassword }) {
    return (
        <AuthenticatedLayout>
            <GuestLayout status={status}>
                <Head title="Log in" />
                <div className="container">
                    <div className="justify-content-center">
                        <h1 className="modal-title fs-3" id="loginModalLabel">Masuk</h1>
                    </div>
                    <div className="modal-body">
                        <LoginForm canResetPassword={canResetPassword} />
                    </div>
                </div>
            </GuestLayout>
        </AuthenticatedLayout>
    );
}
