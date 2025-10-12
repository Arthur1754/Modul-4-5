<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Data Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Nama</th>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>{{ $my_age }} tahun</td>
                            </tr>
                            <tr>
                                <th>Hobi</th>
                                <td>
                                    <ul class="mb-0">
                                        @foreach ($hobbies as $hobby)
                                            <li>{{ $hobby }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Harus Wisuda</th>
                                <td>{{ $tgl_harus_wisuda }}</td>
                            </tr>
                            <tr>
                                <th>Jarak Hari Menuju Wisuda</th>
                                <td>
                                    @if($time_to_study_left > 0)
                                        {{ $time_to_study_left }} hari lagi
                                    @else
                                        Sudah lewat {{ abs($time_to_study_left) }} hari
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Semester Saat Ini</th>
                                <td>Semester {{ $current_semester }}</td>
                            </tr>
                            <tr>
                                <th>Informasi</th>
                                <td class="{{ $current_semester < 3 ? 'text-success' : 'text-warning' }}">
                                    <strong>{{ $semester_info }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <th>Cita-cita</th>
                                <td>{{ $future_goal }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>