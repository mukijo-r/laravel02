@include('layout.header', ['title' => 'Data Mahasiswa'])

        
        <div class="container text-center mt-3 p-4 bg-white">
            <h1 class="mb-3">Data Mahasiswa</h1>
            <div class="row">
                <div class="col-sm-8 col-md-6 m-auto">
                    <ol class="list-group">
                        @forelse ($mahasiswa as $val)
                        <li class="list-group-item">{{$val}}</li>
                        @empty
                        <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                        @endforelse
                    </ol>               
                </div>
            </div>
        </div>

@include('layout.footer')
        

        



    {{-- Pengkondisian --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama }}
        </h1>
 
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nilai }}
        </h1>
        <br>
            @if (($nilai >=0) and ($nilai <50)) 
                <div class="alert alert-danger d-inline-block">
                    Maaf, Anda tidak lulus
                </div>
            @elseif (($nilai >=50) and ($nilai <=100)) 
                <div class="alert alert-success d-inline-block">
                    Selamat, Anda lulus
                </div>
            @else
                <div class="alert alert-dark d-inline-block">
                    Nilai tidak valid
                </div>          
            @endif
    </div>

    {{-- Perulangan for --}}

    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i = 0; $i < 5; $i++)
        <div class="alert alert-info d-inline-block">
            Laravel
        </div>
        @endfor
    </div>

    <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i = 0; $i < 5; $i++)
        <div class="alert alert-info d-inline-block">
            {{ $i }}
        </div>
        @endfor
    </div>

    {{-- Perulangan while --}}

    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        //<?php $i = 0; ?>
        @while ($i < 5)
        <div class="alert alert-info d-inline-block">
            {{ $i }}
        </div>
        //<?php $i++ ?>
        @endwhile
    </div> --}} 

    {{-- Perulangan foreach --}}

    {{-- <div class="container text-center mt-3 pt-3 bg-white"> 
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama }}
        </h1>
        <br>
        @if (count($nilai)>0)
            @foreach ($nilai as $val)
                @if (($val >= 0) and ($val < 50))
                    <div class="alert alert-danger d-inline-block">
                        {{ $val }}
                    </div>
                @elseif (($val >= 50) and ($val <= 100)) 
                    <div class="alert alert-success d-inline-block">
                        {{ $val }}
                    </div>  
                @endif       
            @endforeach
        @else
            <div class="alert alert-dark d-inline-block">
                Tidak ada data...
            </div>
        @endif --}}

        {{-- @forelse ($nilai as $val)
            @if (($val >= 0) and ($val < 50))
                <div class="alert alert-danger d-inline-block">
                    {{ $val }}
                </div>
            @elseif (($val >= 50) and ($val <= 100)) 
                <div class="alert alert-success d-inline-block">
                    {{ $val }}
                </div>  
            @endif       
        @empty
            <div class="alert alert-dark d-inline-block">
                Tidak ada data...
            </div>
        @endforelse --}}

        {{-- @foreach ($nilai as $val)
            @if ($val < 50)
                @break
            @endif
            <div class ="alert alert-success d-inline">
                {{ $val }}
            </div>
        @endforeach 
    </div> --}}
