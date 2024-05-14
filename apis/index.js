const express = require("express");

//const cors = require("cors");
const https = require("https");
// const http = require('http')
require("dotenv").config();
const fs = require("fs");
var bodyParser = require("body-parser");
const path = require("path");
//const Log = require("./models/Log");
// const { initSocket } = require('./socketManager');

const app = express();


// const corsOptions = {
//     origin: "*", // Adjust according to your React app's origin
//     methods: "GET,HEAD,PUT,PATCH,POST,DELETE,OPTIONS",
//     credentials: true, // Allow cookies
// };

// app.use(cors(corsOptions));

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.use(express.static("public"));

// Save All Logs
// app.use(async (req, res, next) => {
//     const { method, originalUrl, query, ip } = req;
//     console.log(
//         `Method: ${method}, URL: ${originalUrl}, Query: ${JSON.stringify(
//             query
//         )}, IP: ${ip}`
//     );

//     const log = new Log({ method, originalUrl, query, ip });
//     await log.save();

//     next();
// });


app.use("/login", require("./routes/auth"));
// app.use("/bandai/api/agent", require("./routes/bandai/agent"));
// app.use("/bandai/api/player", require("./routes/bandai/player"));
// app.use("/bandai/api/report", require("./routes/bandai/report"));
// app.use("/bandai/api/setting", require("./routes/bandai/setting"));
// app.use("/bandai/api/log", require("./routes/bandai/log"));
// Connect to MongoDB
// mongoose.connect('mongodb://127.0.0.1/dotbet')
//   .then(() => console.log('Connected to MongoDB'))
//   .catch(err => console.error('Failed to connect to MongoDB', err));
// mongoose
//     .connect(
//         `mongodb://mongo:45ab4ba57cbed2832c34@dotbet_dotbet-db:27017`
//     )
//     .then(() => console.log("Connected to MongoDB"))
//     .catch((err) => console.error("Failed to connect to MongoDB", err));

// Start the server
const port = process.env.PORT;

// server.listen(port, () => console.log(`Server started on port ${port}`));


    app.listen(port, async () => {
        console.log(`Server started on port ${port}`);
    });

