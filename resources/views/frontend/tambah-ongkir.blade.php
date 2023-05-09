@extends ('layouts.inc.front')

@section('content') 
<div>
    <h1 class="text-lg font-semibold text-center">Tambah Ongkir</h1>
    <form wire:submit.prevent="getOngkir">
        <div class="flex justify-center">
            <div class="mb-3 xl:w-2/3">
                <label for="provinsi" class="text-base">Silahkan pilih provinsi anda</label>
              <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="provinsi" wire:model=''>
                    <option value="0">Provinsi</option>
                
              </select>
            </div>
        </div>
        
        <div class="flex justify-center">
            <div class="mb-3 xl:w-2/3">
                <label for="kota" class="text-base">Silahkan pilih Kota anda</label>
              <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="kota" wire:model='kota_id'>
                  <option value="">Kabupaten / Kota</option>
                  
              </select>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="mb-3 xl:w-2/3">
                <label for="nama_jasa" class="text-base">Silahkan pilih Jasa Pengiriman</label>
              <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="nama_jasa" wire:model='nama_jasa'>
                  <option value="">pilih jasa pengiriman</option>
                  <option value="jne">JNE</option>
                  <option value="pos">Pos Indonesia</option>
                  <option value="tiki">TIKI</option>
              </select>
            </div>
        </div>

        
        <br><br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary items-center justify-center">Lihat Daftar Ongkir</button>
        </div>

    </form>

    


</div>
@endsection