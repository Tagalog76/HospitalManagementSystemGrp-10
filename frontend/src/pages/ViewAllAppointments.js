import React, { useState, useEffect } from 'react';

const ViewAllAppointments = () => {
  const [appointments, setAppointments] = useState([]);

  // Sample data for testing
  const sampleAppointments = [
    {
      id: 1,
      patient_id: 101,
      doctor_id: 201,
      appointment_date: '2024-06-15 10:00 AM',
      status: 'scheduled',
      reason: 'Routine check-up',
      created_at: '2024-06-10T08:00:00Z',
      updated_at: '2024-06-10T08:30:00Z',
    },
    {
      id: 2,
      patient_id: 102,
      doctor_id: 201,
      appointment_date: '2024-06-16 02:30 PM',
      status: 'completed',
      reason: 'Follow-up consultation',
      created_at: '2024-06-11T09:00:00Z',
      updated_at: '2024-06-16T15:00:00Z',
    },
   
  ];

  // Simulating fetching data from an API
  useEffect(() => {
    // In a real application, replace this with API call to fetch appointments
    // For now, set sample data
    setAppointments(sampleAppointments);
  }, []);

  return (
    <div>
      <h2>Appointments</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Patient ID</th>
            <th>Status</th>
            <th>Reason</th>
          </tr>
        </thead>
        <tbody>
          {appointments.map((appointment, index) => (
            <tr key={index}>
              <td>{appointment.id}</td>
              <td>{appointment.appointment_date.split(' ')[0]}</td>
              <td>{appointment.appointment_date.split(' ')[1]}</td>
              <td>{appointment.patient_id}</td>
              <td>{appointment.status}</td>
              <td>{appointment.reason}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default ViewAllAppointments;
