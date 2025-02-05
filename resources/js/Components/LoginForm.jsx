import Checkbox from '@/Components/Checkbox';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Link, useForm } from '@inertiajs/react';

export default function LoginForm({ onSuccess, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('login'), {
            onFinish: () => {
                reset('password');
                if (onSuccess) onSuccess(); // Jika ada fungsi setelah login (misal: close modal)
            },
        });
    };

    return (
        <form onSubmit={submit}>
            {/* Email Input */}
            <div className="mb-3">
                <InputLabel htmlFor="email" value="Email" />
                <TextInput
                    id="email"
                    type="email"
                    name="email"
                    value={data.email}
                    className="form-control"
                    autoComplete="off"
                    isFocused={true}
                    onChange={(e) => setData('email', e.target.value)}
                />
                <InputError message={errors.email} />
            </div>

            {/* Password Input */}
            <div className="mb-3">
                <InputLabel htmlFor="password" value="Kata Sandi" />
                <TextInput
                    id="password"
                    type="password"
                    name="password"
                    value={data.password}
                    autoComplete="off"
                    className="form-control"
                    onChange={(e) => setData('password', e.target.value)}
                />
                <InputError message={errors.password} />
            </div>

            {/* Remember Me & Forgot Password */}
            <div className="d-flex justify-content-between align-items-center mb-3">
                <div className="form-check">
                    <Checkbox
                        name="remember"
                        checked={data.remember}
                        id="remember"
                        onChange={(e) => setData('remember', e.target.checked)}
                    />
                    <label htmlFor="remember" className="form-check-label ms-2">Ingatkan Saya</label>
                </div>
                {canResetPassword && (
                    <Link href={route('password.request')} className="text-decoration-none text-danger">
                        Lupa Kata Sandi?
                    </Link>
                )}
            </div>

            {/* Login Button */}
            <PrimaryButton className="btn-cta p-1 rounded w-100" disabled={processing}>
                Login
            </PrimaryButton>

            {/* Divider */}
            <div className="d-flex align-items-center my-3">
                <hr className="flex-grow-1" />
                <span className="mx-2">atau</span>
                <hr className="flex-grow-1" />
            </div>

            {/* Social Login */}
            <PrimaryButton className="btn-outline-cta p-1 rounded w-100">
                <img src="../images/icons/google.png" width="20" height="20" className="me-2" alt="Google" />
                Masuk dengan Google
            </PrimaryButton>

            <div className='mt-3'>
                <p className="text-center">
                    Belum punya akun? Ayo <Link href={route('register')} className="text-decoration-none">Daftar</Link>
                </p>
            </div>
        </form>
    );
}
