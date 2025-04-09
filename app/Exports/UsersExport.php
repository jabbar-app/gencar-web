<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return User::select([
            'id',
            'name',
            'email',
            'phone',
            'birth_place',
            'birth_date',
            'gender',
            'address',
            'religion',
            'hobbies',
            'emergency_contact',
            'current_activity',
            'last_education',
            'major',
            'social_media',
            'photo',
            'organization_experience_1',
            'organization_experience_2',
            'achievement_experience',
            'about_generasi_cakrawala',
            'motivation',
            'contribution_plan',
            'skill',
            'contribution_location',
            'contribution_field',
            'medical_history',
            'food_allergy',
            'source',
            'commitment_letter',
            'created_at',
        ])->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Email',
            'No HP',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Alamat',
            'Agama',
            'Hobi/Minat',
            'Kontak Darurat',
            'Aktivitas Saat Ini',
            'Pendidikan Terakhir',
            'Jurusan/Bidang',
            'Sosial Media',
            'Foto',
            'Pengalaman Organisasi 1',
            'Pengalaman Organisasi 2',
            'Pengalaman Prestasi',
            'Tentang Generasi Cakrawala',
            'Motivasi',
            'Rencana Kontribusi',
            'Keahlian',
            'Lokasi Kontribusi',
            'Bidang Kontribusi',
            'Riwayat Penyakit',
            'Alergi Makanan',
            'Sumber Info Gencar',
            'Surat Komitmen',
            'Waktu Pendaftaran',
        ];
    }
}
