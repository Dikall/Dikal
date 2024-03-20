@extends('layout.main')
@section('content')
<div class="flex flex-wrap mt-6 justify-center">
          <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                      <p class="pt-2 mb-1 font-semibold">My Biodata!</p>
                      <h5 class="font-bold">Muhammad Radikal</h5>
                      <p class="mb-12">Saya adalah seorang mahasiswa jurusan Sistem Informasi dari Universitas Tanjungpura Pontianak</p>
                      <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="https://github.com/Dikall" href="javascript:;">
                        My Git Hub!!!
                        <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                      </a>
                    </div>
                  </div>
                  <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-4/12 lg:flex-none mx-auto">
                    <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                      <img src="./assets/img/shapes/Kai Icon.jpeg" class="absolute top-0 hidden w-1/3 h-full lg:block" alt="Kai Icon" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
