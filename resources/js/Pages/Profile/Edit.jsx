import { Head } from '@inertiajs/react';
import DeleteUserForm from './Partials/DeleteUserForm';
import UpdatePasswordForm from './Partials/UpdatePasswordForm';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm';
import Layout from '@/Layouts/layout';

export default function Edit({ mustVerifyEmail, status }) {
    return (
        <>
            <Layout>
                <Head title="Profile" />

                <div className="py-5">
                    <div className="container-lg">
                        <div className="row g-4">
                            <div className="col-lg-8 mx-auto">
                                <div className="card shadow-sm">
                                    <div className="card-body">
                                        <UpdateProfileInformationForm
                                            mustVerifyEmail={mustVerifyEmail}
                                            status={status}
                                        />
                                    </div>
                                </div>
                            </div>

                            <div className="col-lg-8 mx-auto">
                                <div className="card shadow-sm">
                                    <div className="card-body">
                                        <UpdatePasswordForm />
                                    </div>
                                </div>
                            </div>

                            <div className="col-lg-8 mx-auto">
                                <div className="card shadow-sm">
                                    <div className="card-body">
                                        <DeleteUserForm />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </Layout>
        </>
    );
}
