<ul class="list-group">
    <li class="list-group-item strong">
        <strong>{{ $hosting->name }}</strong>
    </li>
    <li class="list-group-item strong">
        <span class="label label-pill pull-right">{{ $hosting->disklimit > 1000 ? $hosting->disklimit/1024 . ' GB' : $hosting->disklimit . ' MB' }}</span>
        Espacio en Disco SSD
    </li>
    <li class="list-group-item strong">
        <span class="label label-pill pull-right">{{ round($hosting->bwlimit/1024,0) }} GB</span>
        Transferencia Mensual
    </li>
    <li class="list-group-item strong">
        <span class="label label-pill pull-right">{{ $hosting->mysqldatabases }}</span>
        Bases de Datos MySQL
    </li>
    <li class="list-group-item strong">
        <span class="label label-pill pull-right">{{ $hosting->emailaccounts }}</span>
        Cuentas de Correo
    </li>
    <li class="list-group-item strong">
        <span class="label label-pill pull-right">{{ $hosting->ftpaccounts }}</span>
        Cuentas de FTP
    </li>
    <li class="list-group-item strong">
        <span class="label label-pill pull-right">{{ $hosting->parkeddomains + $hosting->addondomains + 1 }}</span>
        Dominios alojables
    </li>
</ul>