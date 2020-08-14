<?php
/**
 * Registration Model
 *
 * @author  Sandi Andrian <andrian.sandi@gmail.com>
 * @since   Aug 15, 2020 
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registration';

    protected $fillable = ['nama_lengkap','jenis_kelamin','no_ktp','agama','alamat','no_hp','email'];
}
