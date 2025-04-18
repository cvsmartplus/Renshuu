import Checkbox from '@/Components/UI/Checkbox';
import InputError from '@/Components/UI/InputError';
import InputLabel from '@/Components/UI/InputLabel';
import PrimaryButton from '@/Components/UI/PrimaryButton';
import TextInput from '@/Components/UI/TextInput';
import { Link, useForm } from '@inertiajs/react';

export default function LoginForm({ onSuccess, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('login.post'), {
            onSuccess: () => {
                if (onSuccess) onSuccess();
                window.location.reload();
            },
            onFinish: () => reset('password'),
        });
    };
    

    return (
        <form onSubmit={submit}>
            <div className="mb-3">
                <InputLabel  htmlFor="email" value="Email" />
                <TextInput
                    id="email"
                    type="email"
                    name="email"
                    value={data.email}
                    className="form-control"
                    autoComplete="off"
                    isFocused={true}
                    onChange={(e) => setData('email', e.target.value)}
                    required
                />
                <InputError message={errors.email} />
            </div>

            <div className="mb-3">
                <InputLabel  htmlFor="password" value="Kata Sandi" />
                <TextInput
                    id="password"
                    type="password"
                    name="password"
                    value={data.password}
                    autoComplete="off"
                    className="form-control"
                    onChange={(e) => setData('password', e.target.value)}
                    required
                />
                <InputError message={errors.password} />
            </div>

            <div className="d-flex justify-content-between align-items-center mb-3">
                <div className="form-check">
                    <Checkbox
                        name="remember"
                        checked={data.remember}
                        id="remember"
                        label="Ingatkan Saya" // Langsung pakai prop `label`
                        onChange={(e) => setData('remember', e.target.checked)}
                    />

                </div>
                {canResetPassword && (
                    <Link 
                    href={route('password.request')} 
                    className="text-decoration-none text-danger"
                    onClick={(e) => {
                        e.preventDefault(); 
                        window.location.href = route('password.request'); 
                    }}
                    >
                        Lupa Kata Sandi?
                    </Link>
                )}
            </div>

            <PrimaryButton className="btn-cta p-1 rounded w-100" disabled={processing} pending={processing}>
                Login
            </PrimaryButton>
        <div className="d-flex align-items-center my-3">
            <hr className="flex-grow-1" />
            <span className="mx-2">atau</span>
            <hr className="flex-grow-1" />
        </div>

        <PrimaryButton className=" btn-outline-cta p-1 rounded w-100">
            <img src="../images/icons/google.png" width="20" height="20" className="me-2" alt="Google" />
            Masuk dengan Google
        </PrimaryButton>
    </form>
    );
}
