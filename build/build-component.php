<?php
/**
 * @package     AlejoASotelo
 * @subpackage  com_base
 * @author      Alejo A. Sotelo
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @link        alejosotelo.com.ar
 */

// Directorio raíz del proyecto
$root_dir = dirname(__DIR__);

$component_name = 'com_base';

// Directorio de origen
$source_dir = $root_dir . '/component';

// Directorio de destino
$dest_dir = $root_dir . '/dist/' . $component_name;

// Archivo ZIP de destino
$zip_file = $component_name . '.zip';

// Lista de archivos y carpetas a excluir
$exclude = array(".git", ".gitignore", "node_modules", 'php-hot-reloader', 'phrwatcher.php');

if (file_exists($dest_dir)) {
  shell_exec("rm -rf $dest_dir");
  shell_exec('rm -rf '.dirname($dest_dir) . '/' . $zip_file);
}

// Crear el directorio de destino si no existe
shell_exec("mkdir -p $dest_dir");

// Construir el comando rsync con las opciones necesarias
$options = "-a --delete";
foreach ($exclude as $ex) {
  $options .= " --exclude=" . $ex;
}
$command = "rsync $options $source_dir/ $dest_dir";

shell_exec($command);

// Cambiar al directorio de destino
chdir(dirname($dest_dir));


// Comprimir el directorio de destino en un archivo ZIP
$command = "zip -rq $zip_file $component_name";
$result = shell_exec($command);

// Ejecutar el comando y mostrar el resultado
echo $result;
?>
