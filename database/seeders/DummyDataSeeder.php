<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Child;
use App\Models\Diary;
use App\Models\DiaryEntry;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Demo Parent',
            'email' => 'demo@example.com',
            'phone' => '+998901111111',
            'password' => Hash::make('password'),
        ]);

        $child1 = Child::create([
            'user_id' => $user->id,
            'first_name' => 'Ali',
            'last_name' => 'Valiyev',
            'gender' => 'male',
            'birth_date' => '2024-01-15',
            'birth_weight' => 3.5,
            'birth_height' => 52.0,
            'blood_type' => 'O+',
        ]);

        $diary = Diary::create([
            'child_id' => $child1->id,
            'title' => 'Alining Ilk Yili',
            'description' => 'Alijonning esda qolarli onlari',
        ]);

        DiaryEntry::create([
            'diary_id' => $diary->id,
            'event_type' => 'milestone',
            'title' => 'Ilk tabassum',
            'content' => 'Bugun Ali ilk bor menga qarab jilmaydi!',
            'event_date' => '2024-02-20 10:00:00',
        ]);
        
        DiaryEntry::create([
            'diary_id' => $diary->id,
            'event_type' => 'text',
            'title' => 'Qo\'lini kashf etdi',
            'content' => 'Bugun o\'z qollarini soatlab tomosha qildi.',
            'event_date' => '2024-03-05 14:30:00',
        ]);
    }
}
