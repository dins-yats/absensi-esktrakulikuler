<x-app-layout>
 
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    

<div class="py-12">
        <div class="">
            <div class="">
                <x-welcomex />
                <div class="p-4 sm:ml-64">
                    <div class="p-4 border-2 border-gray-200  dark:border-gray-700">                
                        <div class="relative shadow-md sm:rounded-lg">
                            
    <p class="px-4 text-center max-w-lg text-3xl font-semibold  bg-gradient-to-r from-blue-400 via-teal-300 to-yellow-300 inline-block text-transparent bg-clip-text">Export Data Hasil Survei</p>


                            {{-- <div id="table" class="table-responsive col-lg-10 shadow-lg mb-3 mx-auto"> --}}
                            <div id="table" class="overflow-x-auto p-2">
                                
                            <table  id="tableT" class="w-full text-sm text-gray-800 dark:text-gray-400 border border-gray-300">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th rowspan="2" class="text-center px-2 py-1 border">No</th>
                                    <th rowspan="2" class="text-center px-2 py-1 border">Nama</th>
                                    @foreach($tanggalList as $tanggal)
                                      <th scope="col" rowspan="2" class="px-2 py-3 ">
                                    {{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }}
                                     </th>
                                        {{-- <th rowspan="2" class="text-center px-1 py-1 text-[10px] whitespace-nowrap border">
                                            {{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }}
                                        </th> --}}
                                    @endforeach
                                    <th colspan="4" class="text-center px-2 py-1 border">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">H</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">I</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">S</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">A</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($murids as $murid)
                                    @php
                                        $hadir = 0; $izin = 0; $sakit = 0; $alpha = 0;
                                    @endphp
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="text-center px-2 py-1 border">{{ $loop->iteration }}</td>
                                        <td class="px-2 py-1 border">{{ $murid->name }}</td>

                                        @foreach($tanggalList as $tanggal)
                                            @php
                                                $absen = $absensi->first(fn($a) => $a->murid_id == $murid->id && $a->tanggal == $tanggal);
                                                $ket = $absen->keterangan ?? '-';
                                                if ($ket === 'Hadir') $hadir++;
                                                elseif ($ket === 'Izin') $izin++;
                                                elseif ($ket === 'Sakit') $sakit++;
                                                elseif ($ket === 'Alpha') $alpha++;
                                            @endphp
                                            <td class="text-center text-xs px-1 py-1 border">
                                                {{ $ket[0] ?? '-' }}
                                            </td>
                                            {{-- <td class="text-center text-xs px-1 py-1 border">
                                                {{ $ket[0] ?? '-' }}
                                            </td> --}}
                                        @endforeach

                                        <td class="text-center text-xs border">{{ $hadir }}</td>
                                        <td class="text-center text-xs border">{{ $izin }}</td>
                                        <td class="text-center text-xs border">{{ $sakit }}</td>
                                        <td class="text-center text-xs border">{{ $alpha }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                      
                        </table>

                                 {{-- <table id="tableT" class="w-full text-sm text-gray-800 dark:text-gray-400 border border-gray-300">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th rowspan="2" class="text-center px-2 py-1 border">No</th>
                                    <th rowspan="2" class="text-center px-2 py-1 border">Nama</th>
                                    @foreach($tanggalList as $tanggal)
                                      <th scope="col" rowspan="2" class="px-2 py-3 ">
                                    {{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }}
                                     </th>
                                      
                                    @endforeach
                                    <th colspan="4" class="text-center px-2 py-1 border">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">H</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">I</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">S</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">A</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($murids as $murid)
                                    @php
                                        $hadir = 0; $izin = 0; $sakit = 0; $alpha = 0;
                                    @endphp
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="text-center px-2 py-1 border">{{ $loop->iteration }}</td>
                                        <td class="px-2 py-1 border">{{ $murid->name }}</td>

                                        @foreach($tanggalList as $tanggal)
                                            @php
                                                $absen = $absensi->first(fn($a) => $a->murid_id == $murid->id && $a->tanggal == $tanggal);
                                                $ket = $absen->keterangan ?? '-';
                                                if ($ket === 'Hadir') $hadir++;
                                                elseif ($ket === 'Izin') $izin++;
                                                elseif ($ket === 'Sakit') $sakit++;
                                                elseif ($ket === 'Alpha') $alpha++;
                                            @endphp
                                            <td class="text-center text-xs px-1 py-1 border">
                                                {{ $ket[0] ?? '-' }}
                                            </td>
                                        @endforeach

                                        <td class="text-center text-xs border">{{ $hadir }}</td>
                                        <td class="text-center text-xs border">{{ $izin }}</td>
                                        <td class="text-center text-xs border">{{ $sakit }}</td>
                                        <td class="text-center text-xs border">{{ $alpha }}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>

                      
                        </table> --}}
                         <p class=" text-yellow-600 p-4 text-xs">Keterangan : 
                            <br>
                            H = Hadir
                            <br>
                            S = Sakit
                            <br>
                            A = Alpha
                            <br>
                            I = Izin
                         </p>

                              </div>
                                                        


          
                        </div>
                    </div>
                 
                </div>

            
            </div> 
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#tableT').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdfHtml5',
                    title: 'Rekap Absen Anggota Pramuka',
                    orientation: 'landscape',
                    pageSize: 'A4',
                    customize: function (doc) {
                        doc.defaultStyle.fontSize = 6; // kecilkan ukuran font isi
                        doc.styles.tableHeader.fontSize = 7; // kecilkan header
                        doc.styles.tableHeader.alignment = 'center';

                        // rata tengah semua cell
                        doc.content[1].table.body.forEach(function(row) {
                            row.forEach(function(cell) {
                                cell.alignment = 'center';
                            });
                        });

                        // margin halaman lebih sempit
                        doc.pageMargins = [20, 30, 20, 30];
                        doc.content[1].layout = 'lightHorizontalLines';
                        doc.content[1].alignment = 'center';

                        // lebar kolom disesuaikan otomatis
                        var table = doc.content[1].table;
                        var columnCount = table.body[0].length;
                        var widths = [];
                        for (var i = 0; i < columnCount; i++) {
                            widths.push('*'); // atau angka tetap misalnya '30'
                        }
                        table.widths = widths;
                    }
                },
                {
                    extend: 'print',
                    customize: function (win) {
                        $(win.document.body).css('font-size', '10pt');
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                },
            ]
        });
    });
</script>

    {{-- <script>
        $(document).ready(function() {
    $('#tableT').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
            
            {
                extend: 'pdfHtml5',
                title: 'Rekap Absen Anggota Pramuka',
                orientation: 'landscape',
                pageSize: 'A4',
                customize: function (doc) {
                    doc.styles.tableHeader.alignment = 'center';

                    doc.content[1].table.body.forEach(function(row) {
                        row.forEach(function(cell) {
                            cell.alignment = 'center';
                        });
                    });

                    doc.pageMargins = [40, 60, 40, 60];

                    doc.content[1].layout = 'lightHorizontalLines';
                    doc.content[1].alignment = 'center';
                }
            },
            {
                extend: 'print',
                customize: function ( win ) {
                    $(win.document.body)
                        .css('font-size', '10pt');
                    $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                }
            },
        ]
    } );
} );
    </script> --}}

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</x-app-layout>