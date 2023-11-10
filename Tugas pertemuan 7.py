# Praktikum-Pemodelan-Beriontasi-Objek
Tugas Praktikum Pemodelan Berontasi Objek
class Karyawan:
    def __init__(self, nama):
        self.nama = nama
        self.gaji_pokok = 4000000
        self.uang_makan_harian = 30000

    def absensi(self):
        pass

    def hitung_gaji(self):
        gaji = self.gaji_pokok
        if hasattr(self, 'uang_transport'):
            gaji += self.uang_transport
        gaji += self.uang_makan_harian * self.absensi()
        return gaji


class Manager(Karyawan):
    def __init__(self, nama):
        super().__init__(nama)
        self.uang_transport = 30000
        self.tunjangan_profesi = 1500000

    def absensi(self):
        return 20


class Admin(Karyawan):
    def __init__(self, nama):
        super().__init__(nama)
        self.uang_transport = 15000

    def absensi(self):
        return 22


class Marketing(Karyawan):
    def __init__(self, nama):
        super().__init__(nama)
        self.uang_transport = 50000

    def absensi(self):
        return 30


def main():
    manager1 = Manager("John")
    admin1 = Admin("Alice")
    marketing1 = Marketing("Bob")

    print(f"{manager1.nama}: Gaji bulanan = {manager1.hitung_gaji()} rupiah")
    print(f"{admin1.nama}: Gaji bulanan = {admin1.hitung_gaji()} rupiah")
    print(f"{marketing1.nama}: Gaji bulanan = {marketing1.hitung_gaji()} rupiah")


if __name__ == "__main__":
    main()

John: Gaji bulanan = 4630000 rupiah
Alice: Gaji bulanan = 4675000 rupiah
Bob: Gaji bulanan = 4950000 rupiah
