# Praktikum-Pemodelan-Beriontasi-Objek
Tugas Praktikum Pemodelan Berontasi Objek
class Mahasiswa:
    def __init__(self, nama, nim, umur, angkatan):
        self.nama = nama
        self.nim = nim
        self.umur = umur
        self.angkatan = angkatan
    
    def __str__(self):
        return f"Nama saya adalah {self.nama}, dan NIM saya adalah {self.nim}"
    
    def __tahunLahir__(self):
        return 2023 - self.umur
    
    def tahunAngkatan(self):
        return f"{self.angkatan}, mahasiswa angkatan 20{self.nim[:2]}"

saya = Mahasiswa("Salsa", "2207002", 19, "2022")
print("Nama saya adalah", saya.nama)
print("NIM saya adalah", saya.nim)
print("Tahun lahir saya adalah", saya.umur)
print("Tahun angkatan saya adalah", saya.angkatan)

saya = Mahasiswa("Salsa", "2207002", 19, "2022")
print(saya)
Nama saya adalah Salsa
NIM saya adalah 2207002
Tahun lahir saya adalah 2004
Tahun angkatan saya adalah 2022
Nama saya adalah Salsa, dan NIM saya adalah 2207002
