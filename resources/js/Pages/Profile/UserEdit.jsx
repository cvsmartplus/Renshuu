import { useForm, usePage } from '@inertiajs/react';
import { useState } from 'react';
import { Link } from '@inertiajs/react';
import Layout from "@/Layouts/layout";
import SideBar from "@/Components/Common/SideBar";
import { Head } from "@inertiajs/react";
import UpdatePasswordForm from './Partials/UpdatePasswordForm';

export default function UserEdit({ mustVerifyEmail, status, className = '' }) {
    const user = usePage().props.auth.user;
    const { data, setData, patch, errors, processing, recentlySuccessful } = useForm({
        name: user.name,
        email: user.email,
    });
    const [activeTab, setActiveTab] = useState("informasi-pribadi");

    const submit = (e) => {
        e.preventDefault();
        patch(route('profile.update'));
    };

    return (
        <Layout>
            <Head title="Settings Account" />
            <SideBar>
                <div className='profile' style={{
                    backgroundImage: "url('../../../images/assets/framer.png')",
                    backgroundRepeat: "no-repeat",
                    backgroundPosition: "right",
                    height: "10vh"
                }}>                
                </div>
                <div className="container py-4">
                    <div className="card shadow-sm p-4">
                        <h3 className="mb-3">Pengaturan Akun</h3>
                        <div className="nav nav-tabs mb-3">
                            <button className={`nav-link ${activeTab === 'informasi-pribadi' ? 'active' : ''}`} onClick={() => setActiveTab('informasi-pribadi')}>Informasi Pribadi</button>
                            <button className={`nav-link ${activeTab === 'keamanan-akun' ? 'active' : ''}`} onClick={() => setActiveTab('keamanan-akun')}>Keamanan Akun</button>
                        </div>

                        {activeTab === "informasi-pribadi" && (
                            <form onSubmit={submit}>
                                <div className="d-flex align-items-center">
                                    <img src="https://picsum.photos/150" className="rounded-circle border" alt="Profile" />
                                    <button className="btn btn-outline-primary ms-3">Ubah Foto Profil</button>
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Nama Lengkap</label>
                                    <input type="text" className="form-control" value={data.name} onChange={(e) => setData('name', e.target.value)} required />
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">No. Telepon</label>
                                    <div className="input-group">
                                        <span className="input-group-text">+62</span>
                                        <input type="number" className="form-control" value={data.phone} onChange={(e) => setData('phone', e.target.value)} />
                                    </div>
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Tanggal Lahir</label>
                                    <input type="date" className="form-control" value={data.birthDate} onChange={(e) => setData('birthDate', e.target.value)} />
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Jenis Kelamin</label>
                                    <div>
                                        <input type="radio" name="gender" value="Laki-laki" onChange={(e) => setData('gender', e.target.value)} /> Laki-laki
                                        <input type="radio" name="gender" value="Perempuan" className="ms-3" onChange={(e) => setData('gender', e.target.value)} /> Perempuan
                                    </div>
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Kota/Kabupaten Saat Ini</label>
                                    <input type="text" className="form-control" value={data.currentCity} onChange={(e) => setData('currentCity', e.target.value)} />
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Tempat Lahir</label>
                                    <input type="text" className="form-control" value={data.birthPlace} onChange={(e) => setData('birthPlace', e.target.value)} />
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Pendidikan Terakhir</label>
                                    <select className="form-select" value={data.lastEducation} onChange={(e) => setData('lastEducation', e.target.value)}>
                                        <option>Pilih pendidikan terakhir</option>
                                        <option>SMA</option>
                                        <option>D3</option>
                                        <option>S1</option>
                                        <option>S2</option>
                                    </select>
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Tahun Kelulusan/Selesai</label>
                                    <input type="date" className="form-control" value={data.graduationYear} onChange={(e) => setData('graduationYear', e.target.value)} />
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Pendidikan Tambahan</label>
                                    <select className="form-select" value={data.additionalEducation} onChange={(e) => setData('additionalEducation', e.target.value)}>
                                        <option>Pilih pendidikan tambahan</option>
                                        <option>Course</option>
                                        <option>Seminar</option>
                                    </select>
                                </div>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Tahun Kelulusan/Selesai</label>
                                    <input type="date" className="form-control" value={data.additionalGraduationYear} onChange={(e) => setData('additionalGraduationYear', e.target.value)} />
                                </div>
                                <button type="submit" className="btn btn-cta w-100" disabled={processing}>Simpan Perubahan</button>
                            </form>
                        )}

                        {activeTab === "keamanan-akun" && (
                            <form onSubmit={submit}>
                                <div className="mb-3">
                                    <label className="form-label fw-semibold">Email</label>
                                    <input type="email" className="form-control" value={data.email} onChange={(e) => setData('email', e.target.value)} required />
                                    {errors.email && <div className="text-danger mt-1">{errors.email}</div>}
                                </div>
                                <div className='mb-3'>
                                    <hr/>
                                </div>
                                <div className="mb-3">
                                    <UpdatePasswordForm />
                                </div>
                                <div className="d-flex align-items-center gap-2">
                                    <button type="submit" className="btn btn-cta w-100" disabled={processing}>Simpan Perubahan</button>
                                </div>
                            </form>
                        )}
                    </div>
                </div>
            </SideBar>
        </Layout>
    );
}
