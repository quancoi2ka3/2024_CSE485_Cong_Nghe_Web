<!DOCTYPE html>
<html>
<head>
  <title>Danh bạ</title>
  <style>
    .contact-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      grid-gap: 20px;
    }

    .contact-card {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    .contact-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .contact-card h3 {
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="contact-grid">
    <div class="contact-card">
      <img src="../DBDT/image/avt1.jpg" alt="Avatar">
      <h3>Jane mith</h3>
      <p>0379125426</p>
      <div class="contact-grid">
    <div class="contact-card">
      <img src="../DBDT/image/avt1.jpg" alt="Avatar">
      <h3>Jane Smith</h3>
      <p>0379125426</p>
    </div>
    <div class="contact-card">
      <img src="../DBDT/image/avt1.jpg" alt="Avatar">
      <h3>John Doe</h3>
      <p>4812896823</p>
    </div>
    <div class="contact-card">
      <img src="../DBDT/image/avt1.jpg" alt="Avatar">
      <h3>Michael Johnson</h3>
      <p>123345666855</p>
    </div>
    <!-- Thêm các contact-card khác tại đây -->
  </div>
<script>
    const employeeSearchCounts = [
      { name: 'Jane Smith', searchCount: 500 },
      { name: 'Jane mith', searchCount: 500 },
      { name: 'John Doe', searchCount: 1000 },
      { name: 'Michael Johnson', searchCount: 250 },
    ];
    employeeSearchCounts.sort((a, b) => b.searchCount - a.searchCount);

    const employeeListItems = document.querySelectorAll('.employee-list');

    employeeSearchCounts.forEach((employee, index) => {
      const listItemIndex = Array.from(employeeListItems).findIndex(item => item.querySelector('h2').textContent === employee.name);
      if (listItemIndex !== -1) {
        const listItem = employeeListItems[listItemIndex];
        listItem.style.order = index + 1;
      }
    });
  </script>
</body>
</html>