import Checkbox from '@/Components/Checkbox';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import GuestLayout from '@/Layouts/GuestLayout';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        terms: false,
    });

    const submit = (e) => {
        e.preventDefault();

        post(route('register'), {
            onFinish: () => reset('password', 'password_confirmation'),
        });
    };

    return (
        <>
        <Head title="Register" />
        <AuthenticatedLayout>
{/* Registration Section */}
<section className="py-3 py-md-5 py-xl-8">
  <div className="container">
    <div className="row gy-4 align-items-center">
      {/* Image Section */}
      <div className="col-12 col-md-6 col-xl-7 d-flex justify-content-center">
        <div className="col-12 col-xl-9">
          <img className="img-fluid" loading="lazy" src="../images/assets/register.png" alt="BootstrapBrain Logo" />
        </div>
      </div>

      {/* Form Section */}
      <div className="col-12 col-md-6 col-xl-5 d-flex justify-content-center">
        <div className="card p-4 shadow-sm" style={{ maxWidth: '400px', width: '100%' }}>
          <div className="card-body">
            <form onSubmit={submit}>
            {/* Name Input */}
            <div className="mb-3">
                <InputLabel htmlFor="name" value="Nama" />
                <TextInput
                  id="name"
                  type="text"
                  name="name"
                  value={data.name}
                  className="form-control"
                  autoComplete="name"
                  isFocused={true}
                  onChange={(e) => setData('name', e.target.value)}
                />
                <InputError message={errors.name} />
            </div>
              {/* Email Input */}
              <div className="mb-3">
                <InputLabel htmlFor="email" value="Email" />
                <TextInput
                  id="email"
                  type="email"
                  name="email"
                  value={data.email}
                  className="form-control"
                  autoComplete="username"
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
                  className="form-control"
                  autoComplete="current-password"
                  onChange={(e) => setData('password', e.target.value)}
                  required
                />
                <InputError message={errors.password} />
              </div>

              {/* Confirm Password Input */}
              <div className="mb-3">
                <InputLabel htmlFor="password_confirmation" value="Ulangi Kata Sandi" />
                <TextInput
                  id="password_confirmation"
                  type="password"
                  name="password_confirmation"
                  value={data.password_confirmation}
                  className="form-control"
                  autoComplete="new-password"
                  onChange={(e) => setData('password_confirmation', e.target.value)}
                  required
                />
                <InputError message={errors.password_confirmation} />
              </div>

              {/* Terms & Conditions */}
              <div className=" mb-3">
                <Checkbox
                  name="term"
                  checked={data.term}
                  id="term"
                  required
                  onChange={(e) => setData('term', e.target.checked)}
                />
                <label htmlFor="term" className="mx-1 small">
                  Saya menyetujui syarat & ketentuan layanan
                </label>
              </div>

              <PrimaryButton className="btn-cta w-100 rounded p-1" disabled={processing}>
                Daftar
              </PrimaryButton>
            </form>
            <div className="mt-3">
                <p className="text-center">
                    Sudah punya akun?{' '}
                    <a 
                        href="#"
                        className="text-decoration-none p-0 cta" 
                        role="button"
                        data-bs-toggle="modal" 
                        data-bs-target="#loginModal"
                        style={{ 
                            fontSize: 'inherit', 
                            display: 'inline',
                            cursor: 'pointer',
                        }}
                        onClick={(e) => e.preventDefault()}
                    >
                        Masuk
                    </a>
                </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        </AuthenticatedLayout>
        </>
    );
}
