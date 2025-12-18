
buku = []
def show_data():
    if len(buku) == 0:
        print("belum ada data")
    else:
        for index in range (len(buku)):
            print(f"{index+1}. {buku[index]}")

    def insert_data(judul):
        buku.append(judul)
        print(f"data {judul} berhasil ditambahkan")
    def edit_data(index, judul_baru):
        if index < 0 or index >= len(buku):
            print("index tidak valid")
        else:
            buku[index] = judul_baru
            print(f"data pada index {index+1} berhasil diubah menjadi {judul_baru}")
    def delete_data():
        show_data()
        index = int(input("masukkan index data yang akan dihapus: ")) - 1
        if index < 0 or index >= len(buku):
            print("index tidak valid")
        else:
            judul = buku.pop(index)
            print(f"data {judul} berhasil dihapus")
    def menu():
        while True:
            print("\n=== MENU BUKU ===")
            print("1. Tampilkan data buku")
            print("2. Tambah data buku")
            print("3. Ubah data buku")
            print("4. Hapus data buku")
            print("5. Keluar")
            pilihan = input("masukkan pilihan (1-5): ")
            if pilihan == "1":
                show_data()
            elif pilihan == "2":
                judul = input("masukkan judul buku: ")
                insert_data(judul)
            elif pilihan == "3":
                show_data()
                index = int(input("masukkan index data yang akan diubah: ")) - 1
                judul_baru = input("masukkan judul buku baru: ")
                edit_data(index, judul_baru)
            elif pilihan == "4":
                delete_data()
            elif pilihan == "5":
                print("terima kasih telah menggunakan program ini.")
                break
            else:
                print("pilihan tidak valid, silakan coba lagi.")
