import React from 'react';
import { Link } from 'react-router-dom';

const AdminDashboard = () => {
  return (
    <div>
      <h2>Admin Dashboard</h2>
      <ul>
        <li><Link to="/admin/manage-patients">Manage Patients</Link></li>
        <li><Link to="/admin/manage-doctors">Manage Doctors</Link></li>
      </ul>
    </div>
  );
};

export default AdminDashboard;
