# Báo cáo đồ án thực hành NT533.O11.MMCL.1
### Thành viên
    Nhóm 7:
        Trần Lê Khôi - 20521484
        Nguyễn Đức Toàn - 20522026
        Lương Mạnh Tiến - 20522008
### Giáo viên hướng dẫn
    Thầy Lê Anh Tuấn
### Giới thiệu về đồ án
- Trong đồ án này, nhóm chúng em đã thực hiện trên nền tảng K8S với hai web services chính chạy trên Docker và các services có thể kết nối đến database, ngoài ra nhóm chúng em còn cài thêm một số các services quan trọng như Kong Ingress Controller, Kubenetes Dashboard, Configmap, Secret và Persistent Volume.
### Các công nghệ đã sử dụng
- Frontend: html, css và js.
- Backend: php.
- Database: mysql.
- Container: Docker.
- Deploy platform: K8S.
### Kết quả demo
- Về hoạt động của các web services thì sẽ được phân luồng theo path bởi kong ingress controller và lưu dữ liệu trong persistent volume.
  - Truy cập vào web service bar.
    ![image](https://github.com/suppi147/NT533.O11.MMCL.1-Group7-Project/assets/97881547/15b091b0-5110-48be-b891-ffd7b82f411f)
  - Truy cập vào web service Noteziee và lưu dữ liệu trong database.
    ![image](https://github.com/suppi147/NT533.O11.MMCL.1-Group7-Project/assets/97881547/88cfd3d4-9570-4f32-a743-5f17ff0b003f)
  - Lưu dữ liệu trong persistent storage.
    ![image](https://github.com/suppi147/NT533.O11.MMCL.1-Group7-Project/assets/97881547/0a76c95b-a6b0-4ed5-9af2-c6ef77ecf579)
  - Service kong ingress controller.
    ![image](https://github.com/suppi147/NT533.O11.MMCL.1-Group7-Project/assets/97881547/7218f3ce-1bac-42ed-b3b9-5a8c8d299e0b)
- Triển khai các services lưu các biến như là configmap và secret.
    ![image](https://github.com/suppi147/NT533.O11.MMCL.1-Group7-Project/assets/97881547/857835f7-6216-48c4-a76c-9a62be0240d3)
- Triển khai kubernetes dashboard.
    ![image](https://github.com/suppi147/NT533.O11.MMCL.1-Group7-Project/assets/97881547/b0e4e6e7-00af-47a9-b2c8-5dfd3788b74e)
### Kết thúc
    
