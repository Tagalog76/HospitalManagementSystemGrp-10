import React from 'react';

const ViewAppointments = ({ appointments, onCancelAppointment, onRescheduleAppointment }) => {
  // Sample data for appointments
  const sampleAppointments = appointments || [
    { id: 1, date: '2024-06-15', doctorName: 'Dr. Smith', patientName: 'John Doe', status: 'Scheduled' },
    { id: 2, date: '2024-06-16', doctorName: 'Dr. Brown', patientName: 'Jane Smith', status: 'Scheduled' },
    // Add more appointments as needed
  ];

  const handleCancel = (appointmentId) => {
    // Example function to handle cancellation
    if (window.confirm('Are you sure you want to cancel this appointment?')) {
      // Call onCancelAppointment function passed as prop
      onCancelAppointment(appointmentId);
    }
  };

  const handleReschedule = (appointmentId) => {
    // Example function to handle rescheduling
    // Call onRescheduleAppointment function passed as prop
    onRescheduleAppointment(appointmentId);
  };

  return (
    <div>
      <h2>View Appointments</h2>
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Patient</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {sampleAppointments.map(appointment => (
            <tr key={appointment.id}>
              <td>{appointment.date}</td>
              <td>{appointment.doctorName}</td>
              <td>{appointment.patientName}</td>
              <td>{appointment.status}</td>
              <td>
                {appointment.status === 'Scheduled' && (
                  <>
                    <button onClick={() => handleReschedule(appointment.id)}>Reschedule</button>
                    <button onClick={() => handleCancel(appointment.id)}>Cancel</button>
                  </>
                )}
                {appointment.status === 'Canceled' && (
                  <span>Canceled</span>
                )}
                {appointment.status === 'Rescheduled' && (
                  <span>Rescheduled</span>
                )}
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default ViewAppointments;
