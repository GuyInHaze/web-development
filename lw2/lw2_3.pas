PROGRAM PrintHello(INPUT, OUTPUT);
USES DOS;
VAR
  Name: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Name := GetEnv('QUERY_STRING');
  IF POS('name=', Name) <> 0
  THEN
    IF POS('&', Name) > 0
    THEN
      WRITELN('Hello dear ', COPY(Name, 6, POS('&', Name) - 6))
    ELSE
      WRITELN('Hello dear ', COPY(Name, 6, LENGTH(Name) - 4))
  ELSE
    WRITELN('Hello anonymous')
END.
