import { useForm } from "@inertiajs/react";
import InputError from "../UI/InputError";
import PrimaryButton from "../UI/PrimaryButton";
import TextInput from "../UI/TextInput";

export default function ForgotPasswordForm() {
    const { data, setData, post, processing, errors } = useForm({
        email: '',
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('password.email'));
    };

    return (
        <form onSubmit={submit}>
            <div className="mb-3">
                <label htmlFor="email" className="form-label fw-semibold">Email</label>
                <div className="input-group">
                    <span className="input-group-text">
                        <i className="fas fa-envelope"></i>
                    </span>
                    <TextInput
                        id="email"
                        type="email"
                        name="email"
                        value={data.email}
                        className="form-control"
                        isFocused={true}
                        required
                        placeholder="Masukkan email Anda"
                        onChange={(e) => setData('email', e.target.value)}
                    />
                </div>
                <InputError message={errors.email} className="text-danger mt-1" />
            </div>

            <div className="d-grid">
                <PrimaryButton className="btn btn-cta" disabled={processing}>
                    <i className="fas fa-paper-plane"></i> Kirim Link Reset
                </PrimaryButton>
            </div>
        </form>
    );
}
