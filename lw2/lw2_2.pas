PROGRAM PrintMessage(INPUT, OUTPUT);
USES
  DOS;
VAR
  Query: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnV('QUERY_STRING');
  IF Query = 'lanterns=1'
  THEN
    WRITELN('land.')
  ELSE
    IF Query = 'lanterns=2'
    THEN
      WRITELN('sea.')
    ELSE
      WRITELN('sarah didn'' say.')
END.
