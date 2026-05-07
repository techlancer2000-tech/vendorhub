import './bootstrap';
import 'flowbite';
import Chart from 'chart.js/auto';
import Swal from 'sweetalert2';
import DataTable from 'datatables.net-dt';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.Chart = Chart;
window.Swal = Swal;
window.DataTable = DataTable;

Alpine.start();
