var Acuity = require('acuityscheduling');

var acuity = Acuity.basic({
  userId: 11882475,
  apiKey: '192c8ba95ad08d5e261dea39a62deec2'
});

acuity.request('appointments', function (err, res, appointments) {
  if (err) return console.error(err);
  console.log(appointments);
});