
<table>
      @foreach ($ruang as $r)
            <tr colspan="6">
            <tr colspan="6">
            <tr colspan="6">
            <th align="center" colspan="6" style="font-size: 15px;font-weight: bold; width:800px" >{{'RUANG'}} {{$r->no_ruangan}} ( {{$r->nama_ruangan}} )</th>
            <tr colspan="6">
                <th align="center" colspan="6" style="font-size: 15px;font-weight: bold; width:800px" >DAFTAR PESERTA UJIAN AKHIR SEMESTER GANJIL</th>
            
            <tr colspan="6">
                <th align="center" colspan="6" style="font-size: 15px;font-weight: bold; width:800px" >TAHUN PELAJARAN 2022/2023</th>
            
            
        </tr>
        
        @php
        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );
        $day = date('D');
        @endphp
        <tr>
            <td colspan="6" align="right">{{ $dayList[$day].' , '.date('d-M-Y') }}</td>
            <tr style="background-color: #DC3535;border:1px solid #000" colspan="6">
            <td style="background-color: #F49D1A;border:1px solid #000" colspan="6" align="center">Sesi 1</td>

        </tr>
        <tr>
            <td style="background-color: #F49D1A;border:1px solid #000;width:50px">#</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:100px" align="left">NISN</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:350px">nama</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:400px">kelas</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:100px">status</td>

            <td style="background-color: #F49D1A;border:1px solid #000;width:100px">sesi</td>
        </tr> 
        
        @php
            $nomer1 = 1;
        @endphp
    
        @foreach ($data as $row)
        @if ($row->sesi == 1 && $r->id  == $row->id_ruangan)
    <tr>
                    <td style="border:1px solid #000">{{$nomer1++}}</td>
                    <td style="border:1px solid #000">{{$row->nisn}}</td>
                    <td style="border:1px solid #000">{{Str::upper($row->nama)}}</td>
                    <td style="border:1px solid #000">{{$row->kelas . ' ' . $row->jurusan . ' ' . $row->no_kelas}}</td>
                    <td style="border:1px solid #000">{{$row->status }}</td>

                    <td style="border:1px solid #000">{{$row->sesi}}</td>
                </tr>
            @endif
        @endforeach

        <tr colspan="6"></tr>
        <tr colspan="6"></tr>

        <tr>
            <td colspan="6" align="right">{{ $dayList[$day].' , '.date('d-M-Y') }}</td>
            <tr style="background-color: #DC3535;border:1px solid #000" colspan="6">
            <td style="background-color: #5F8D4E;border:1px solid #000" colspan="6" align="center">Sesi 2</td>

        </tr>
        <tr>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:50px">#</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:100px" align="left">NISN</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:350px">nama</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:400px">kelas</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:100px">status</td>

            <td style="background-color: #5F8D4E;border:1px solid #000;width:100px">sesi</td>
        </tr> 
        
        @php
            $nomer2 = 1;
        @endphp
        @foreach ($data as $row)
            @if ($row->sesi == 2 && $r->id  == $row->id_ruangan)
            @foreach ($jurusan as $j )
                @if($j->id == $row->id_jurusan)
                <tr>
                    <td style="border:1px solid #000">{{$nomer2++}}</td>
                    <td style="border:1px solid #000">{{$row->nisn}}</td>
                    <td style="border:1px solid #000">{{$row->nama}}</td>
                    <td style="border:1px solid #000">{{$row->kelas . ' ' . $row->jurusan . ' ' . $row->no_kelas}}</td>
                    <td style="border:1px solid #000">{{$row->status }}</td>

                    <td style="border:1px solid #000">{{$row->sesi}}</td>
                </tr>
                @endif
            @endforeach

            @endif
        @endforeach
        
        <tr colspan="6"></tr>
        <tr colspan="6"></tr>

        <tr>
            <td colspan="6" align="right">{{ $dayList[$day].' , '.date('d-M-Y') }}</td>
            <tr style="background-color: #DC3535;border:1px solid #000" colspan="6">
            <td style="background-color: #DC3535;border:1px solid #000" colspan="6" align="center">Sesi 3</td>
            
            
        </tr>
        <tr>
            <td style="background-color: #DC3535;border:1px solid #000;width:50px">#</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:100px" align="left">NISN</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:350px">nama</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:400px">kelas</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:100px">status</td>

            <td style="background-color: #DC3535;border:1px solid #000;width:100px">sesi</td>
        </tr> 
        
        @php
            $nomer3 = 1;
        @endphp
        @foreach ($data as $row)
            @if ($row->sesi == 3 && $r->id  == $row->id_ruangan)
                <tr>
                    <td style="border:1px solid #000">{{$nomer3++}}</td>
                    <td style="border:1px solid #000">{{$row->nisn}}</td>
                    <td style="border:1px solid #000">{{$row->nama}}</td>
                    <td style="border:1px solid #000">{{$row->kelas . ' ' . $row->jurusan . ' ' . $row->no_kelas}}</td>
                    <td style="border:1px solid #000">{{$row->status }}</td>

                    <td style="border:1px solid #000">{{$row->sesi}}</td>
                </tr>
            @endif
        @endforeach
      @endforeach
</table>