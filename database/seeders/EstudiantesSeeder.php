<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            //01=Arquitectura 02=Artes Visuales 03=Diseño Grafico
            //04=Civil 05=Electronica 06=Sistemas
            //07=Derecho 08=Lic.Ciencias 09=Lic.Lengua
            //11=Biologia 12=Fisica 13=Informática
            //Carbon::createFromDate(1998, 6, 26)->format('Y-m-d'),
            [
                'codEstudiante' => '1000',
                'nomEstudiante' => 'VALDERRAMA CAMPS NÉLIDA MARÍA',
                'edaEstudiante' => 18,
                'fechEstudiante' => Carbon::createFromDate(2004,10,10)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '01'
            ],
            [
                'codEstudiante' => '1001',
                'nomEstudiante' => 'QUINTERO MARIN ELIANA CAROLINA',
                'edaEstudiante' => 22,
                'fechEstudiante' => Carbon::createFromDate(2000,10,2)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '01'
            ],
            [
                'codEstudiante' => '1002',
                'nomEstudiante' => 'RIOS RAMOS LUIS ALEJANDRO',
                'edaEstudiante' => 22,
                'fechEstudiante' => Carbon::createFromDate(2001,03,13)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '01'
            ],
            [
                'codEstudiante' => '1003',
                'nomEstudiante' => 'MELÉNDEZ ARJONA MIRIAM MARICELA',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,10,7)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '01'
            ],
            [
                'codEstudiante' => '1004',
                'nomEstudiante' => 'GALAN PINILLA MARTHA CECILIA',
                'edaEstudiante' => 20,
                'fechEstudiante' => Carbon::createFromDate(2002,10,29)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '01'
            ],	
            [
                'codEstudiante' => '1005',
                'nomEstudiante' => 'TORRES CÁRDENAS ELISABETH LUNA',
                'edaEstudiante' => 22,
                'fechEstudiante' => Carbon::createFromDate(2001,04,21)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '02'
            ],
            [
                'codEstudiante' => '1006',
                'nomEstudiante' => 'TEJERO ARAGONÉS SANDRA MARCELA',
                'edaEstudiante' => 24,
                'fechEstudiante' => Carbon::createFromDate(1998,12,2)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '02'
            ],
            [
                'codEstudiante' => '1007',
                'nomEstudiante' => 'PEDRERO MATEOS ROSA HAYDÉE',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2002,01,5)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '02'
            ],
            [
                'codEstudiante' => '1008',
                'nomEstudiante' => 'ROSELLÓ SALMERÓN MARIO ANDRÉS',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2002,02,26)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '02'
            ],
            [
                'codEstudiante' => '1009',
                'nomEstudiante' => 'BLANCO GUZMÁN PERLA SOFÍA',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2004,06,2)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '02'
            ],
            [
                'codEstudiante' => '1010',
                'nomEstudiante' => 'AGUIRRE CARDONA VERÓNICA SOFÍA',
                'edaEstudiante' => 20,
                'fechEstudiante' => Carbon::createFromDate(2002,9,4)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '03'
            ],
            [
                'codEstudiante' => '1011',
                'nomEstudiante' => 'URIARTE CASAS DAVID SANTIAGO',
                'edaEstudiante' => 20,
                'fechEstudiante' => Carbon::createFromDate(2002,9,24)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '03'
            ],
            [
                'codEstudiante' => '1012',
                'nomEstudiante' => 'ROMAN PAZ REYNALDO BARTOLOMÉ',
                'edaEstudiante' => 22,
                'fechEstudiante' => Carbon::createFromDate(2001,04,2)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '03'
            ],
            [
                'codEstudiante' => '1013',
                'nomEstudiante' => 'ROBLEDO DUEÑAS HILARIO JOSÉ',
                'edaEstudiante' => 24,
                'fechEstudiante' => Carbon::createFromDate(1998,12,26)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '03'
            ],
            [
                'codEstudiante' => '1014',
                'nomEstudiante' => 'MADRID TOLOSA MARTHA ALEXANDRA',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2002,05,20)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '03'
            ],	
            [
                'codEstudiante' => '1015',
                'nomEstudiante' => 'LÓPEZ RÍO MIGUEL ÁNGEL',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,06,27)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '04'
            ],
            [
                'codEstudiante' => '1016',
                'nomEstudiante' => 'ARAUJO LAMAS OMAR LUCIANO',
                'edaEstudiante' => 25,
                'fechEstudiante' => Carbon::createFromDate(1998,03,23)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '04'
            ],
            [
                'codEstudiante' => '1017',
                'nomEstudiante' => 'CARRANZA JORDÁ JORDI ALEXANDER',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,11,9)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '04'
            ],
            [
                'codEstudiante' => '1018',
                'nomEstudiante' => 'SAMPER SANCHEZ JUAN FELIPE',
                'edaEstudiante' => 23,
                'fechEstudiante' => Carbon::createFromDate(2000,04,22)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '04'
            ],
            [
                'codEstudiante' => '1019',
                'nomEstudiante' => 'MOSQUERA SALGADO MARIANA ANAÍ',
                'edaEstudiante' => 24,
                'fechEstudiante' => Carbon::createFromDate(1999,06,14)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '04'
            ],	
            [
                'codEstudiante' => '1020',
                'nomEstudiante' => 'DUARTE SALGADO ANA MARÍA',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,9,25)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '05'
            ],
            [
                'codEstudiante' => '1021',
                'nomEstudiante' => 'PALACIOS RUIZ VIOLETA ESPERANZA',
                'edaEstudiante' => 18,
                'fechEstudiante' => Carbon::createFromDate(2004,10,9)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '05'
            ],
            [
                'codEstudiante' => '1022',
                'nomEstudiante' => 'VÉLEZ QUINTERO AURORA CECILIA',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2002,02,5)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '05'
            ],
            [
                'codEstudiante' => '1023',
                'nomEstudiante' => 'HERNANDEZ FUERTEZ MÓNICA FERNANDA',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2004,03,29)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '05'
            ],
            [
                'codEstudiante' => '1024',
                'nomEstudiante' => 'ZAMBRANO RIBAS CARLOS ERNESTO',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,8,25)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '05'
            ],	
            [
                'codEstudiante' => '1025',
                'nomEstudiante' => 'GUERRA SIERRA ANGIE LUCÍA',
                'edaEstudiante' => 25,
                'fechEstudiante' => Carbon::createFromDate(1998,04,14)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '06'
            ],
            [
                'codEstudiante' => '1026',
                'nomEstudiante' => 'GALLARDO ROSAS LEANDRO ARTURO',
                'edaEstudiante' => 20,
                'fechEstudiante' => Carbon::createFromDate(2002,10,14)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '06'
            ],
            [
                'codEstudiante' => '1027',
                'nomEstudiante' => 'MUÑOZ FIGUEROA GUILLERMO SEBASTIAN',
                'edaEstudiante' => 20,
                'fechEstudiante' => Carbon::createFromDate(2002,8,11)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '06'
            ],
            [
                'codEstudiante' => '1028',
                'nomEstudiante' => 'QUEVEDO BAYÓN HUMBERTO ANDRÉS',
                'edaEstudiante' => 23,
                'fechEstudiante' => Carbon::createFromDate(1999,8,21)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '06'
            ],
            [
                'codEstudiante' => '1029',
                'nomEstudiante' => 'BORRÁS VIGIL PALOMA XIMENA',
                'edaEstudiante' => 22,
                'fechEstudiante' => Carbon::createFromDate(2001,01,11)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '06'
            ],	
            [
                'codEstudiante' => '1030',
                'nomEstudiante' => 'VIZCAÍNO ALSINA AMARA SOFÍA',
                'edaEstudiante' => 22,
                'fechEstudiante' => Carbon::createFromDate(2000,11,23)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '07'
            ],
            [
                'codEstudiante' => '1031',
                'nomEstudiante' => 'ESTRADA URIARTE NELSON PATRICIO',
                'edaEstudiante' => 23,
                'fechEstudiante' => Carbon::createFromDate(2000,01,13)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '07'
            ],
            [
                'codEstudiante' => '1032',
                'nomEstudiante' => 'CARDONA GONZALES SEBASTIÁN ALEJANDRO',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2002,06,19)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '07'
            ],
            [
                'codEstudiante' => '1033',
                'nomEstudiante' => 'PORTILLO MARTÍNEZ EFRAÍN ELADIO',
                'edaEstudiante' => 25,
                'fechEstudiante' => Carbon::createFromDate(1997,10,9)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '07'
            ],
            [
                'codEstudiante' => '1034',
                'nomEstudiante' => 'CAPARRÓS MORANTE EDGAR GILBERTO',
                'edaEstudiante' => 25,
                'fechEstudiante' => Carbon::createFromDate(1997,11,25)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '07'
            ],
            [
                'codEstudiante' => '1035',
                'nomEstudiante' => 'ABASCAL GALLEGO ANDREA CARLOTA',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,07,4)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '08'
            ],
            [
                'codEstudiante' => '1036',
                'nomEstudiante' => 'URBANO DÁVILA GABRIEL ALEJANDRO',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,10,19)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '08'
            ],
            [
                'codEstudiante' => '1037',
                'nomEstudiante' => 'BASTIDAS IGLESIAS VALERIA SOFÍA',
                'edaEstudiante' => 22,
                'fechEstudiante' => Carbon::createFromDate(2000,11,20)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '08'
            ],
            [
                'codEstudiante' => '1038',
                'nomEstudiante' => 'JIMÉNEZ ANDRADE VICTOR ALFONSO',
                'edaEstudiante' => 20,
                'fechEstudiante' => Carbon::createFromDate(2002,07,31)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '08'
            ],
            [
                'codEstudiante' => '1039',
                'nomEstudiante' => 'LÓPEZ PEREZ OMAR GERMÁN',
                'edaEstudiante' => 23,
                'fechEstudiante' => Carbon::createFromDate(1999,11,8)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '08'
            ],	
            [
                'codEstudiante' => '1040',
                'nomEstudiante' => 'VILLALOBOS ECHEVERRY MARÍA ALEJANDRA',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2004,04,25)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '09'
            ],
            [
                'codEstudiante' => '1041',
                'nomEstudiante' => 'MUÑOZ CASANOVA OMAR OSWALDO',
                'edaEstudiante' => 23,
                'fechEstudiante' => Carbon::createFromDate(1999,11,2)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '09'
            ],
            [
                'codEstudiante' => '1042',
                'nomEstudiante' => 'BRAVO ROSERO DANIELA JAZMIN',
                'edaEstudiante' => 20,
                'fechEstudiante' => Carbon::createFromDate(2002,12,2)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '09'
            ],
            [
                'codEstudiante' => '1043',
                'nomEstudiante' => 'AVILÉS PAZ ARMANDO DANIEL',
                'edaEstudiante' => 24,
                'fechEstudiante' => Carbon::createFromDate(1998,11,12)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '09'
            ],
            [
                'codEstudiante' => '1044',
                'nomEstudiante' => 'VILLOTA GINER ÁNGEL MAURICIO',
                'edaEstudiante' => 24,
                'fechEstudiante' => Carbon::createFromDate(1998,8,23)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '09'
            ],	
            [
                'codEstudiante' => '1045',
                'nomEstudiante' => 'CABRERA ACOSTA CHRISTIAN DAVID',
                'edaEstudiante' => 18,
                'fechEstudiante' => Carbon::createFromDate(2004,07,24)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '11'
            ],
            [
                'codEstudiante' => '1046',
                'nomEstudiante' => 'VARGAS MEJÍA ANGÉLICA PIEDAD',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2001,07,5)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '11'
            ],
            [
                'codEstudiante' => '1047',
                'nomEstudiante' => 'BARÓN AGUILAR CARLOS HERIBERTO',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,07,7)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '11'
            ],
            [
                'codEstudiante' => '1048',
                'nomEstudiante' => 'CHAVEZ PUERTA ÓSCAR MAURICIO',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,11,20)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '11'
            ],
            [
                'codEstudiante' => '1049',
                'nomEstudiante' => 'PRATZ IZQUIERDO ALEXA MAITE',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2002,06,23)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '11'
            ],
            [
                'codEstudiante' => '1050',
                'nomEstudiante' => 'PINEDA MAYOL YOLANDA ESPERANZA',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2001,07,26)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '12'
            ],
            [
                'codEstudiante' => '1051',
                'nomEstudiante' => 'BOLAÑOS SALVÁ FACUNDO JOSÉ',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2003,8,4)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '12'
            ],
            [
                'codEstudiante' => '1052',
                'nomEstudiante' => 'VELÁSQUEZ ARAUJO PEDRO PABLO',
                'edaEstudiante' => 21,
                'fechEstudiante' => Carbon::createFromDate(2002,05,29)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '12'
            ],
            [
                'codEstudiante' => '1053',
                'nomEstudiante' => 'DÍAZ MELO VICTOR ANTONIO',
                'edaEstudiante' => 26,
                'fechEstudiante' => Carbon::createFromDate(1997,02,2)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '12'
            ],
            [
                'codEstudiante' => '1054',
                'nomEstudiante' => 'TORRES RODRÍGUEZ SOFÍA VALENTINA',
                'edaEstudiante' => 20,
                'fechEstudiante' => Carbon::createFromDate(2002,9,26)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '12'
            ],	
            [
                'codEstudiante' => '1055',
                'nomEstudiante' => 'SANTOS DOMÍNGEZ ELIZABETH FERNANDA',
                'edaEstudiante' => 19,
                'fechEstudiante' => Carbon::createFromDate(2004,05,29)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '13'
            ],
            [
                'codEstudiante' => '1056',
                'nomEstudiante' => 'ROSAS VILLA CALEB FELIPE',
                'edaEstudiante' => 26,
                'fechEstudiante' => Carbon::createFromDate(1997,04,15)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '13'
            ],
            [
                'codEstudiante' => '1057',
                'nomEstudiante' => 'ROMERO IBARRA ROYMAN DARÍO',
                'edaEstudiante' => 18,
                'fechEstudiante' => Carbon::createFromDate(2004,8,26)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '13'
            ],
            [
                'codEstudiante' => '1058',
                'nomEstudiante' => 'VERGARA CÓRDOVA FERNANDO JAVIER',
                'edaEstudiante' => 23,
                'fechEstudiante' => Carbon::createFromDate(1999,07,6)->format('Y-m-d'),
                'sexEstudiante' => 'M',
                'programa' => '13'
            ],
            [
                'codEstudiante' => '1059',
                'nomEstudiante' => 'PERUGACHE GÓMEZ ROSA MARÍA',
                'edaEstudiante' => 25,
                'fechEstudiante' => Carbon::createFromDate(1997,8,18)->format('Y-m-d'),
                'sexEstudiante' => 'F',
                'programa' => '13'
            ]
        ];

        DB::table('estudiantes')->insert($datos);
    }
}
