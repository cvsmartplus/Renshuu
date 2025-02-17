import Checkbox from '@/Components/UI/Checkbox';
import InputError from '@/Components/UI/InputError';
import InputLabel from '@/Components/UI/InputLabel';
import PrimaryButton from '@/Components/UI/PrimaryButton';
import TextInput from '@/Components/UI/TextInput';
import Layout from '@/Layouts/Layout';
import { Head, useForm } from '@inertiajs/react';
import { useEffect } from 'react';
import { toast } from 'react-toastify';
import "react-toastify/dist/ReactToastify.css";

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        terms: false,
    });

    useEffect(() => {
      if (errors.email) {
          toast.error(errors.email, {
              position: "top-center",
              autoClose: 3000,
              hideProgressBar: false,
              closeOnClick: true,
              pauseOnHover: true,
              draggable: true,
          });
      }
  }, [errors]); // Menambahkan dependencies agar dijalankan saat `errors` berubah
  

    const submit = (e) => {
        e.preventDefault();

        post(route('register'), {
            onFinish: () => reset('password', 'password_confirmation'),
             onError: (err) => {
                            console.log("Error response:", err);
                            if (err.otp) {
                                toast.error("OTP yang Anda masukkan salah!", {
                                    position: "top-center",
                                    autoClose: 3000,
                                    hideProgressBar: false,
                                    closeOnClick: true,
                                    pauseOnHover: true,
                                    draggable: true,
                                });
                            }
                        },
        });
    };

    return (
        <>
        <Head title="Register" />
        <Layout>
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
                <div className="card p-3 shadow-sm" style={{ maxWidth: '400px', width: '100%' }}>
                  {/* Header Form */}
                  <div className=" mb-3 align-items-center d-flex justify-content-between flex-wrap">
                    <h2 className="text-bold">Daftar</h2>
                    <p className="text-end">Langkah 1 dari 5</p>
                  </div>

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
                          required
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
                              required
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
                      <div className="mb-3 d-flex align-items-center">
                        <Checkbox
                          name="terms"
                          checked={data.terms}
                          id="terms"
                          required
                          onChange={(e) => setData('terms', e.target.checked)}
                        />
                        <label htmlFor="terms" className="ms-2 small">
                          Saya menyetujui syarat & ketentuan layanan
                        </label>
                      </div>

                      {/* Submit Button */}
                      <PrimaryButton className="btn-cta w-100 rounded p-1" disabled={processing}>
                        Daftar
                      </PrimaryButton>
                    </form>

                    {/* Login Redirect */}
                    <div className="mt-3">
                      <p className="text-center">
                        Sudah punya akun?{' '}
                        <a 
                          href="#" 
                          className="text-decoration-none cta" 
                          data-bs-toggle="modal" 
                          data-bs-target="#loginModal"
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

        </Layout>
        </>
    );
}
