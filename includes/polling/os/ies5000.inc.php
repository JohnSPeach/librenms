<?php
# ies 5005
if ($device['sysObjectID'] == '.1.3.6.1.4.1.890.1.5.13.7') {
    $ies5005 = snmp_get_multi_oid($device, ['.1.3.6.1.4.1.890.1.5.13.5.6.3.1.4.0.1'], '-OQUn');
    $version   = $ies5005['.1.3.6.1.4.1.890.1.5.13.5.6.3.1.4.0.1'];
}

# ies 5106
if ($device['sysObjectID'] == '.1.3.6.1.4.1.890.1.5.13.10') {
    $ies5106 = snmp_get_multi_oid($device, ['.1.3.6.1.4.1.890.1.5.13.5.6.2.1.3.0', '.1.3.6.1.4.1.890.1.5.13.5.6.3.1.4.0.6'], '-OQUn');
    $serial  = $ies5106['.1.3.6.1.4.1.890.1.5.13.5.6.2.1.3.0'];
    $version = $ies5106['.1.3.6.1.4.1.890.1.5.13.5.6.3.1.4.0.6'];
}