<div class="container-fluid py-4">
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <span class="text-white text-capitalize ps-3">Penjualan Terbaru</span>
                <button class="btn btn-success btn-sm mt-3" wire:click="create()">Tambah Penjualan</button>
            @if($isModalOpen)
            @include('livewire.addpemasukan')
            @endif
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>                
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Pemasukan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($listkonten as $konten)
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$konten->judul}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$konten->pemasukan}}</p>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-danger mt-3" wire:click="delete( {{$konten->id}} )">Hapus</a></div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $listkonten->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>