import { useForm, usePage } from '@inertiajs/react';
import { Link } from '@inertiajs/react';

export default function UpdateProfileInformation({ mustVerifyEmail, status, className = '' }) {
    const user = usePage().props.auth.user;

    const { data, setData, patch, errors, processing, recentlySuccessful } = useForm({
        name: user.name,
        email: user.email,
    });

    const submit = (e) => {
        e.preventDefault();
        patch(route('profile.update'));
    };

    return (
        <section className={className}>
            <header>
                <h2 className="h5 text-dark">Profile Information</h2>
                <p className="text-muted">Update your account's profile information and email address.</p>
            </header>

            <form onSubmit={submit} className="mt-4">
                {/* Name Field */}
                <div className="mb-3">
                    <label htmlFor="name" className="form-label">Name</label>
                    <input
                        id="name"
                        type="text"
                        className="form-control"
                        value={data.name}
                        onChange={(e) => setData('name', e.target.value)}
                        required
                        autoComplete="name"
                    />
                    {errors.name && <div className="text-danger mt-1">{errors.name}</div>}
                </div>

                {/* Email Field */}
                <div className="mb-3">
                    <label htmlFor="email" className="form-label">Email</label>
                    <input
                        id="email"
                        type="email"
                        className="form-control"
                        value={data.email}
                        onChange={(e) => setData('email', e.target.value)}
                        required
                        autoComplete="username"
                    />
                    {errors.email && <div className="text-danger mt-1">{errors.email}</div>}
                </div>

                {/* Email Verification */}
                {mustVerifyEmail && user.email_verified_at === null && (
                    <div className="mb-3">
                        <p className="text-muted">
                            Your email address is unverified.
                            <Link
                                href={route('verification.send')}
                                method="post"
                                as="button"
                                className="btn btn-link p-0"
                            >
                                Click here to re-send the verification email.
                            </Link>
                        </p>
                        {status === 'verification-link-sent' && (
                            <div className="alert alert-success mt-2">
                                A new verification link has been sent to your email address.
                            </div>
                        )}
                    </div>
                )}

                {/* Submit Button */}
                <div className="d-flex align-items-center gap-2">
                    <button type="submit" className="btn btn-cta" disabled={processing}>
                        Save
                    </button>
                    {recentlySuccessful && <span className="text-success">Saved.</span>}
                </div>
            </form>
        </section>
    );
}
