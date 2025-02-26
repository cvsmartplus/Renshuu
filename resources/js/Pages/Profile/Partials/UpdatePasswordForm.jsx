import { useForm } from '@inertiajs/react';
import { useRef } from 'react';

export default function UpdatePasswordForm({ className = '' }) {
    const passwordInput = useRef();
    const currentPasswordInput = useRef();

    const {
        data,
        setData,
        errors,
        put,
        reset,
        processing,
        recentlySuccessful,
    } = useForm({
        current_password: '',
        password: '',
        password_confirmation: '',
    });

    const updatePassword = (e) => {
        e.preventDefault();

        put(route('password.update'), {
            preserveScroll: true,
            onSuccess: () => reset(),
            onError: (errors) => {
                if (errors.password) {
                    reset('password', 'password_confirmation');
                    passwordInput.current.focus();
                }

                if (errors.current_password) {
                    reset('current_password');
                    currentPasswordInput.current.focus();
                }
            },
        });
    };

    return (
        <section className={`container mt-4 ${className}`}>
            <header>
                <h2 className="h5 text-dark">Update Password</h2>
                <p className="text-muted">
                    Ensure your account is using a long, random password to stay secure.
                </p>
            </header>

            <form onSubmit={updatePassword} className="mt-4">
                <div className="mb-3">
                    <label htmlFor="current_password" className="form-label">
                        Current Password
                    </label>
                    <input
                        id="current_password"
                        ref={currentPasswordInput}
                        value={data.current_password}
                        onChange={(e) => setData('current_password', e.target.value)}
                        type="password"
                        className="form-control"
                        autoComplete="current-password"
                    />
                    {errors.current_password && (
                        <div className="alert alert-danger mt-2">{errors.current_password}</div>
                    )}
                </div>

                <div className="mb-3">
                    <label htmlFor="password" className="form-label">
                        New Password
                    </label>
                    <input
                        id="password"
                        ref={passwordInput}
                        value={data.password}
                        onChange={(e) => setData('password', e.target.value)}
                        type="password"
                        className="form-control"
                        autoComplete="new-password"
                    />
                    {errors.password && (
                        <div className="alert alert-danger mt-2">{errors.password}</div>
                    )}
                </div>

                <div className="mb-3">
                    <label htmlFor="password_confirmation" className="form-label">
                        Confirm Password
                    </label>
                    <input
                        id="password_confirmation"
                        value={data.password_confirmation}
                        onChange={(e) => setData('password_confirmation', e.target.value)}
                        type="password"
                        className="form-control"
                        autoComplete="new-password"
                    />
                    {errors.password_confirmation && (
                        <div className="alert alert-danger mt-2">{errors.password_confirmation}</div>
                    )}
                </div>

                <div className="d-flex align-items-center gap-3">
                    <button type="submit" className="btn btn-cta" disabled={processing}>
                        Save
                    </button>

                    {recentlySuccessful && (
                        <p className="text-success mb-0">Saved.</p>
                    )}
                </div>
            </form>
        </section>
    );
}
