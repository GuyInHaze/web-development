PROGRAM PrintMessage(INPUT, OUTPUT);
USES DOS;
VAR
  Lanterns: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Lanterns := GetEnv('QUERY_STRING');
  IF Lanterns = 'lanterns=1'
  THEN
    WRITELN('The british are coming by land.')
  ELSE
    IF Lanterns = 'lanterns=2'
    THEN
      WRITELN('The british are coming by sea.')
    ELSE
      WRITELN('Sarah didn'' say.')
END.

