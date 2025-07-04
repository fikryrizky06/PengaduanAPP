<x-app-layout>
    <div class="container mt-4">
        <h1 class="mb-4">Laporan Edit</h1>

        <form action="{{ route('report.update', $report->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ $report->description }}</textarea>
            </div>

            <!-- Type -->
            <div class="mb-3">
                <label for="type" class="form-label">Tipe</label>
                <select name="type" id="type" class="form-select" required>
                    <option value="KEJAHATAN" {{ $report->type == 'KEJAHATAN' ? 'selected' : '' }}>KEJAHATAN</option>
                    <option value="PEMBANGUNAN" {{ $report->type == 'PEMBANGUNAN' ? 'selected' : '' }}>PEMBANGUNAN</option>
                    <option value="SOSIAL" {{ $report->type == 'SOSIAL' ? 'selected' : '' }}>SOSIAL</option>
                </select>
            </div>

            <!-- Province -->
            <div class="mb-3">
                <label for="province" class="form-label">Provinsi</label>
                <input type="text" name="province" id="province" class="form-control" value="{{ $report->province }}" required>
            </div>

            <!-- Regency -->
            <div class="mb-3">
                <label for="regency" class="form-label">Kabupaten</label>
                <input type="text" name="regency" id="regency" class="form-control" value="{{ $report->regency }}" required>
            </div>

            <!-- Subdistrict -->
            <div class="mb-3">
                <label for="subdistrict" class="form-label">Kecamatan</label>
                <input type="text" name="subdistrict" id="subdistrict" class="form-control" value="{{ $report->subdistrict }}" required>
            </div>

            <!-- Village -->
            <div class="mb-3">
                <label for="village" class="form-label">Desa</label>
                <input type="text" name="village" id="village" class="form-control" value="{{ $report->village }}" required>
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($report->image)
                    <p class="mt-2">Gambar Saat ini:</p>
                    <img src="{{ asset('images/' . $report->image) }}" alt="Report Image" class="img-fluid rounded" style="max-width: 200px;">
                @endif
            </div>

            <!-- Submit and Cancel Buttons -->
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('report.index') }}" class="btn btn-secondary">Batalkan</a>
        </form>
    </div>
</x-app-layout>
