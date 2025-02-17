import LoginForm from '@/Components/Forms/LoginForm';
import { Link, useForm } from '@inertiajs/react';
import { useState, useEffect } from 'react';

export default function Logmod({ canResetPassword }) {
    return (
        <div className="modal fade" id="loginModal" tabIndex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal-content container">
                    <div className="modal-header justify-content-center">
                        <h1 className="modal-title fs-3" id="loginModalLabel">Masuk</h1>
                    </div>
                    <div className="modal-body">
                        <LoginForm 
                            canResetPassword={canResetPassword}
                            onSuccess={() => window.location.reload()} // Reload setelah login sukses
                        />
                        <div className='mt-3'>
                            <p className="text-center">
                                Belum punya akun? Ayo <Link href={route('register')} className="text-decoration-none">Daftar</Link>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
