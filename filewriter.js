function writeToFileEntry(entry, text) {
  entry.createWriter(function(fileWriter) {
    let data = Blob([text], { type: "text/plain" });

    fileWriter.write(data);
  }, function(fileError) {
    /* do whatever to handle the error */
  });
}