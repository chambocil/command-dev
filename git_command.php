<?php

// TODO :
- Open Visual studio code
- Add New Project or Add New Folder Project
- tekan CTRL+ ~  or klik kanan Open New Terminal ---> untuk membuka TERMINAL.

//? Command-git
- git init      : git inisial. wajib di gunakan setiap ingin mengupload ke GIT.
- .gitignore    : file yang menggunakan extention ini akan di abaikan oleh GIT. (pembuatan .gitignore sebaiknya 
                 dilakukan sebelum membuat repositori).
- git status    : untuk melihat status repositori. (list semua file di dalam repositori).
- git add       : berfungsi untuk menambahkan file ke version control, digunakan jika file revisi sudah ditandai,
                 tetapi belum disimpan ke version control. 
                 //! contoh : (git add nama_file)
                 //! git add git_command.php  (menambahkan hanya 1 file)
                 //! git add index.php about.php home.php (menambahkan 3 file)
                 //! git add *.php or git add * (menambahkan semua file .php / menambahkan semua file tanpa memandang extention)
                 //! git add . (menambahkan semua file dan direktori)
- git log       : untuk melihat log / perubahan.
                //! git log
                //! git log --oneline (melihat perubahan dalam 1 baris)
                //! git log (nomor revisi/commit)
                //! git log index.php (melihat perubahan pada file tertentu)
                //! git log --author (melihat perubahan dari author tertentu)
- git diff      : untuk melihat perubahan yg dilakukan pada revisi
                //! git diff no_revisi (perbandingan berdasarkan no revisi)
                //! git diff index.php (perbandingan berdasarkan nama file)
                //! git diff no_commit no_commit (perbandingan berdasarkan no commit)
                //! git diff nama_cabang nama_cabang (perbandingan antar nama cabang (branch))
- git checkout  : (belum git add / git commit) untuk membatalkan perubahan git.
                //! git checkout index.php
- git chekout branch : untuk memindahkan branch sendiri agar tidak mengganggu file di master.
                //! git branch halaman_login (keluar dari branch master dan beralih ke branch halaman_login)
- git reset     : (sudah git add) untuk menghapus/membatalkan git yang sudah di staged.
                //! git reset index.php
-git revert -n  : membatalkan semua perubahan yang ada.
                //! git revert -n no_commit
- git branch    : membuat cabang untuk masing2 developer agar tidak mengganggu query developer lain.
                //! git branch nama_cabang
                //! git branch fitur_upload
                //! git branch fitur_login
- git merge     : menggabungkan file yang ada di branch ke master.
                //? git checkout master (berpindah ke master terlebih dahulu) note : branch sudah di buat.
                //! git merge halaman_login
- git branch -d : menghapus branch yg sudah tidak terpakai/tidak dilakukan pengembangan lagi.
                //! git branch -d halaman_login
                